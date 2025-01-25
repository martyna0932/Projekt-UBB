<?php
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class RecruitmentFormTest extends TestCase
{
    private $client;
    private $conn;

    protected function setUp(): void
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost/Projekt-UBB', 
            'timeout'  => 2.0,
        ]);

     
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "plakaty";
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function testInputSanitization()
    {
        $invalidFormData = [
            'name' => '<script>alert("XSS")</script>',
            'email' => 'test@example.com',
            'phone' => '1234567890',
            'position' => 'personel',
            'message' => 'Hello, I want to <b>apply</b> for the job.',
            'experience' => 'nie',
            'availability' => 'Available from 9 AM to 5 PM',
            'hobbies' => 'Coding, hacking</script>'
        ];

        
        $response = $this->client->post('/submit_form.php', [
            'form_params' => $invalidFormData
        ]);

       
        $this->assertNotContains('<script>', (string)$response->getBody(), 'Скрипты не были удалены из данных');
        $this->assertNotContains('</script>', (string)$response->getBody(), 'Скрипты не были удалены из данных');
        $this->assertNotContains('<b>', (string)$response->getBody(), 'HTML теги не были удалены из данных');
        $this->assertNotContains('</b>', (string)$response->getBody(), 'HTML теги не были удалены из данных');

      
        $stmt = $this->conn->prepare('SELECT * FROM applicants WHERE email = ?');
        $stmt->bind_param('s', $invalidFormData['email']);
        $stmt->execute();
        $result = $stmt->get_result();

        $this->assertEquals(0, $result->num_rows, 'Вредоносные данные были сохранены в базу данных');
    }



    public function testFormValidation()
    {
        $formData = [
            'name' => '',
            'email' => 'invalid_email',
            'phone' => '',
            'position' => '',
            'message' => '',
            'experience' => 'tak',
            'availability' => '',
            'hobbies' => ''
        ];

        $response = $this->client->post('/submit_form.php', [
            'form_params' => $formData
        ]);

        $this->assertEquals(400, $response->getStatusCode(), 'Форма не отреагировала на ошибочные данные');
        $this->assertStringContainsString('Please fill out this field', (string)$response->getBody(), 'Ошибки не были найдены');
    }

    public function testServerErrorHandling()
    {
        $response = $this->client->get('/nonexistent_page');
        $this->assertEquals(404, $response->getStatusCode(), 'Страница не обработала ошибку 404 корректно');
    }

    public function testFormStyles()
    {
        $response = $this->client->get('/recruitment_form');
        $body = (string)$response->getBody();

        $this->assertStringContainsString('background-color: #000;', $body, 'Цвет фона страницы не соответствует ожиданиям');
        $this->assertStringContainsString('background-color: #ffc107;', $body, 'Цвет кнопки не соответствует ожиданиям');
        $this->assertStringContainsString('font-weight: bold;', $body, 'Шрифт кнопки не соответствует ожиданиям');
    }
    public function testPagesAvailability()
    {
        $urlsToTest = [
            '/formularz.html',
            '/kariera.html',
            '/login.html',
            '/o-nas.html',
            '/register'
        ];

        foreach ($urlsToTest as $url) {
            $response = $this->client->get($url, ['http_errors' => false]);
            $this->assertNotEquals(404, $response->getStatusCode(), "Страница $url вернула ошибку 404");
        }
    }

    protected function tearDown(): void
    {
        $this->conn->close();
    }
}

?>
