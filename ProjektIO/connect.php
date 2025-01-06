<?php
$host = 'localhost';
$db = 'nazwa_bazy';
$user = 'uzytkownik';
$password = 'haslo';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Błąd połączenia: " . $e->getMessage());
}
?>