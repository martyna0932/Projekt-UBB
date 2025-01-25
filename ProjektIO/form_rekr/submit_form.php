<?php
include 'RekrutacjaClasses.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $position = $_POST['position'] ?? '';
    $message = $_POST['message'] ?? '';
    $experience = $_POST['experience'] ?? '';
    $availability = $_POST['availability'] ?? '';
    $hobbies = $_POST['hobbies'] ?? '';

    try {
        
        $application = RecruitmentFactory::createApplication($position);

        
        echo "<h1>Twoja aplikacja została złożona!</h1>";
        echo "<p>Dziękujemy, $name!</p>";
        echo "<p>E-mail: $email</p>";
        echo "<p>Numer telefonu: $phone</p>";
        echo "<p>{$application->getDetails()}</p>";
        echo "<p>Dlaczego chcesz dołączyć: $message</p>";
        echo "<p>Doświadczenie: $experience</p>";
        echo "<p>Dostępność: $availability</p>";
        echo "<p>Zainteresowania: $hobbies</p>";
    } catch (Exception $e) {
        echo "<p>Błąd: " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p>Błąd: Nieprawidłowa metoda żądania.</p>";
}
?>
