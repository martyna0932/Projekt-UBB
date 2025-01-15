<?php
// Debugowanie danych
echo "<pre>";
print_r($_POST);  // Zobacz, czy dane są przekazywane przez formularz
echo "</pre>";

// Załaduj klasy
include 'ItemComponent.php';  // Zakładając, że masz ten plik w tym samym folderze

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pobieramy dane z formularza
    $popcornQuantity = $_POST['popcorn-quantity']; // Ilość popcornu
    $popcornSize = $_POST['popcorn-size']; // Rozmiar popcornu
    $nachosyQuantity = $_POST['nachosy-quantity']; // Ilość nachosów
    $nachosySize = $_POST['nachosy-size']; // Rozmiar nachosów
    $hotdogQuantity = $_POST['hotdog-quantity']; // Ilość hot-dogów
    $hotdogSize = $_POST['hotdog-size']; // Rozmiar hot-doga
    $colaQuantity = $_POST['cola-quantity']; // Ilość coli
    $colaSize = $_POST['cola-size']; // Rozmiar coli
    $waterQuantity = $_POST['water-quantity']; // Ilość wody

    // Tworzymy zamówienie (kompozyt)
    $order = new Order();

    // Dodajemy popcorn do zamówienia
    for ($i = 0; $i < $popcornQuantity; $i++) {
        $order->addItem(new Popcorn($popcornSize));  // Dodajemy popcorn z wybranym rozmiarem
    }

    // Dodajemy nachosy do zamówienia
    for ($i = 0; $i < $nachosyQuantity; $i++) {
        $order->addItem(new Nachosy($nachosySize));  // Dodajemy nachosy z wybranym rozmiarem
    }

    // Dodajemy hot-dogi do zamówienia
    for ($i = 0; $i < $hotdogQuantity; $i++) {
        $order->addItem(new HotDog($hotdogSize));  // Dodajemy hot-doga z wybranym rozmiarem
    }

    // Dodajemy napoje do zamówienia
    for ($i = 0; $i < $colaQuantity; $i++) {
        $order->addItem(new Drink($colaSize));  // Dodajemy colę z wybranym rozmiarem
    }

    for ($i = 0; $i < $waterQuantity; $i++) {
        $order->addItem(new Drink("Water"));  // Dodajemy wodę (domyślnie nie ma rozmiaru)
    }

    // Wyświetlamy potwierdzenie zamówienia
    echo "<div class='container mt-5'>";
    echo "<h2 style='color: #ffc404;'>Dziękujemy za złożenie zamówienia!</h2>";
    echo "<ul style='font-size: 1.2rem;'>";

    // Wyświetlamy zamówione produkty z rozmiarem i ceną
    $totalCost = 0;

    if ($popcornQuantity > 0) {
        echo "<li><strong>Popcorn ({$popcornSize})</strong> x {$popcornQuantity} - " . (new Popcorn($popcornSize))->cost() . " PLN</li>";
        $totalCost += (new Popcorn($popcornSize))->cost() * $popcornQuantity;
    }
    if ($nachosyQuantity > 0) {
        echo "<li><strong>Nachosy ({$nachosySize})</strong> x {$nachosyQuantity} - " . (new Nachosy($nachosySize))->cost() . " PLN</li>";
        $totalCost += (new Nachosy($nachosySize))->cost() * $nachosyQuantity;
    }
    if ($hotdogQuantity > 0) {
        echo "<li><strong>Hot-Dog ({$hotdogSize})</strong> x {$hotdogQuantity} - " . (new HotDog($hotdogSize))->cost() . " PLN</li>";
        $totalCost += (new HotDog($hotdogSize))->cost() * $hotdogQuantity;
    }
    if ($colaQuantity > 0) {
        echo "<li><strong>Cola ({$colaSize})</strong> x {$colaQuantity} - " . (new Drink($colaSize))->cost() . " PLN</li>";
        $totalCost += (new Drink($colaSize))->cost() * $colaQuantity;
    }
    if ($waterQuantity > 0) {
        echo "<li><strong>Woda</strong> x {$waterQuantity} - " . (new Drink("Water"))->cost() . " PLN</li>";
        $totalCost += (new Drink("Water"))->cost() * $waterQuantity;
    }

    echo "</ul>";

    // Wyświetlamy całkowity koszt zamówienia
    echo "<p style='color: white; font-size: 1.2rem;'>Całkowity koszt zamówienia: <strong>{$totalCost} PLN</strong></p>";
    echo "<p style='color: white;'>Czekamy na Twoje potwierdzenie. Zostaniesz powiadomiony, gdy zamówienie będzie gotowe.</p>";
    echo "<div class='button-container' style='display: flex; justify-content: center; gap: 20px; margin-top: 20px;'>
            <a href='index.php' class='btn btn-outline-light'>Wróć na stronę główną</a>
            <a href='order-online.php' class='btn btn-outline-light'>Zamów Online</a>
          </div>";
    echo "</div>";
} else {
    echo "<p>Nie otrzymano żadnych danych. Proszę spróbować ponownie.</p>";
}
?>
