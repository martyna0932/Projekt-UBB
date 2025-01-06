<?php
// Połączenie z bazą danyc
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plakaty";

// Tworzymy połączenie
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzamy połączenie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Zapytanie do bazy danych, aby pobrać plakaty
$sql = "SELECT * FROM posters";
$result = $conn->query($sql);

// Tworzymy tablicę, aby przechować wyniki
$posters = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $posters[] = $row;
    }
}

// Zamykamy połączenie
$conn->close();

/*// Wysyłamy dane w formacie JSON
header('Content-Type: application/json');
echo json_encode($posters);*/
?>
