<?php
// Połączenie z bazą danych
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

// Pobieranie plakatów z bazy danych
$sql = "SELECT * FROM posters";
$result = $conn->query($sql);

// Tworzymy tablicę, aby przechować wyniki
$posters = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $posters[] = $row;
    }
}

// Obsługa formularza logowania
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Odbieramy dane z formularza
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Zapytanie do bazy danych w celu sprawdzenia, czy użytkownik istnieje
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        // Sprawdzamy, czy użytkownik istnieje
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Weryfikacja hasła (zakładamy, że hasła są zahashowane)
            if (password_verify($password, $user['password'])) {
                // Logowanie udane
                echo "Zalogowano pomyślnie!";
                
                // Rozpoczynamy sesję
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                // Przekierowanie na stronę główną (np. home.php)
                header("Location: home.php");
                exit;
            } else {
                // Nieprawidłowe hasło
                echo "Nieprawidłowy email lub hasło.";
            }
        } else {
            // Nie znaleziono użytkownika
            echo "Nieprawidłowy email lub hasło.";
        }

        // Zamykamy zapytanie
        $stmt->close();
    } else {
        echo "Nieprawidłowy email lub hasło.";
    }
}

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Błąd połączenia z bazą danych: " . $e->getMessage());
}
// Zamykamy połączenie
$conn->close();
?>
