<?php
use PHPUnit\Framework\TestCase;

class PosterResolutionTest extends TestCase
{
    private $conn;

    protected function setUp(): void
    {
      
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "plakaty";

       
        $this->conn = new mysqli($servername, $username, $password, $dbname);

      
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function testPosterImageResolution()
    {
    
        $sql = "SELECT sciezka_pliku FROM posters";
        $result = $this->conn->query($sql);


        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                $imagePath = $row['sciezka_pliku'];

               
                $this->assertFileExists($imagePath);

                
                $imageInfo = getimagesize($imagePath);
                $this->assertNotFalse($imageInfo, "Nie można pobrać informacji o obrazie z pliku: $imagePath");

                
                $maxWidth = 1920;
                $maxHeight = 1080;
                $this->assertLessThanOrEqual($maxWidth, $imageInfo[0], "Szerokość obrazu przekracza dozwoloną wartość: $imagePath");
                $this->assertLessThanOrEqual($maxHeight, $imageInfo[1], "Wysokość obrazu przekracza dozwoloną wartość: $imagePath");
            }
        } else {
            $this->fail("Brak plakatów w bazie danych");
        }
    }

    protected function tearDown(): void
    {
        
        $this->conn->close();
    }
}
