<?php
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class PageExistenceTest extends TestCase
{
    private $client;
    private $urlsToTest;

    protected function setUp(): void
    {
        $this->client = new Client([
            'base_uri' => 'http://localhost/Projekt-UBB', // Adres lokalny strony
            'timeout'  => 2.0,  // Czas oczekiwania na odpowiedź
        ]);

        // Lista stron do testowania
        $this->urlsToTest = [
            '/formularz.html',
            '/kariera.html',
            '/login.html',
            '/o-nas.html',
            '/register'
        ];
    }

    /**
     * Testujemy dostępność wszystkich stron
     */
    public function testPagesAvailability()
    {
        foreach ($this->urlsToTest as $url) {
            $response = $this->client->get($url, ['http_errors' => false]);
            $this->assertNotEquals(404, $response->getStatusCode(), "Strona $url zwróciła błąd 404");
        }
    }

    protected function tearDown(): void
    {
        // Sprzątanie po teście, jeśli wymagane
    }
}