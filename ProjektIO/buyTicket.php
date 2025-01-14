<?php
include 'TicketClasses.php';  // Dołączamy plik z klasami biletów

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ticketType = $_POST['ticketType'] ?? '';
    $quantity = (int)($_POST['quantity'] ?? 0);

    try {
        // Tworzenie biletu przy użyciu fabryki
        $ticket = TicketFactory::createTicket($ticketType);

        // Obliczanie ceny
        $totalPrice = $ticket->getPrice() * $quantity;

        echo "<h1>Zakup zakończony sukcesem!</h1>";
        echo "<p>Kupiono {$quantity} x {$ticket->getDescription()}</p>";
        echo "<p>Całkowity koszt: {$totalPrice} PLN</p>";
    } catch (Exception $e) {
        echo "<p>Błąd: " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p>Błąd: Nieprawidłowa metoda żądania.</p>";
}
?>