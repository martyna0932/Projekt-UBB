<?php
include 'connect.php'; // Plik z połączeniem PDO

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    // Sprawdź, czy hasła są takie same
    if ($password !== $confirm_password) {
        echo "Hasła nie są zgodne!";
        exit;
    }

    // Zaszyfruj hasło
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Zapisz użytkownika w bazie danych
    try {
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$username, $email, $hashed_password]);

        echo "Rejestracja zakończona sukcesem! <a href='login.html'>Zaloguj się</a>";
    } catch (PDOException $e) {
        echo "Błąd: " . $e->getMessage();
    }
}
?>