
<?php
// Dane do połączenia z bazą danych
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plakaty";

// Tworzymy połączenie z bazą danych
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzamy połączenie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Dane użytkownika (np. z formularza)
$email = "user@example.com"; // W rzeczywistości, te dane będą pochodzić z $_POST
$password = "user_password"; // W rzeczywistości, te dane będą pochodzić z $_POST

// Hashowanie hasła
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Przygotowanie zapytania SQL, aby uniknąć SQL injection
$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
if ($stmt === false) {
    die("Błąd przygotowania zapytania: " . $conn->error);
}

// Powiązanie parametrów
$stmt->bind_param("ss", $email, $hashedPassword); // 'ss' oznacza, że oba parametry są typu string

// Wykonanie zapytania
if ($stmt->execute()) {
    echo "Nowy użytkownik został dodany.";
} else {
    echo "Błąd: " . $stmt->error;
}
// Zamykamy zapytanie i połączenie
$stmt->close();
$conn->close();
?>