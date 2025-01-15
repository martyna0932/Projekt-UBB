<?php
// Pobieranie danych przesłanych przez formularz
$popcornQuantity = $_POST['popcorn-quantity'];
$nachosyQuantity = $_POST['nachosy-quantity'];
$hotdogQuantity = $_POST['hotdog-quantity'];
$colaQuantity = $_POST['cola-quantity'];
$waterQuantity = $_POST['water-quantity'];

// Tworzymy tablicę do przechowywania pozycji zamówienia
$orderSummary = [];

if ($popcornQuantity > 0) {
    $orderSummary[] = "Popcorn x {$popcornQuantity}";
}
if ($nachosyQuantity > 0) {
    $orderSummary[] = "Nachosy x {$nachosyQuantity}";
}
if ($hotdogQuantity > 0) {
    $orderSummary[] = "Hot-Dog x {$hotdogQuantity}";
}
if ($colaQuantity > 0) {
    $orderSummary[] = "Cola x {$colaQuantity}";
}
if ($waterQuantity > 0) {
    $orderSummary[] = "Woda x {$waterQuantity}";
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podsumowanie Zamówienia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background-color: black;
            padding: 30px;
            border-radius: 15px;
            margin-top: 40px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        h1, h2 {
            color: #ffc404;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #ffc404;
            border-color: #ffc404;
            padding: 10px 20px;
            font-size: 1.2rem;
        }
        .btn-primary:hover {
            background-color: #ff9f00;
            border-color: #ff9f00;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 1rem;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Podsumowanie Zamówienia</h1>
        <h2 style="color: #ffc404;">Twoje zamówienie:</h2>
        <ul style="font-size: 1.2rem;">
            <?php
                // Wyświetlamy wszystkie pozycje w zamówieniu
                foreach ($orderSummary as $item) {
                    echo "<li>{$item}</li>";
                }
            ?>
        </ul>

        <div class="button-container">
            <a href="order-online.php" class="btn btn-outline-light">Wróć do zamówienia</a>
            <a href="confirm-order.php" class="btn btn-primary">Potwierdź zamówienie</a>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Kino XYZ | Wszystkie prawa zastrzeżone</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
