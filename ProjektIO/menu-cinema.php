<?php 
// Przykładowe dane dla menu kinowego (jedzenie)
$cinemaMenu = [
    ['name' => 'Popcorn', 'sizes' => ['Small' => 7, 'Medium' => 9, 'Large' => 12]],
    ['name' => 'Nachosy', 'sizes' => ['Small' => 8, 'Medium' => 9, 'Large' => 13]],
    ['name' => 'Hot Dog', 'sizes' => ['Small' => 9, 'Large' => 12]]
];

// Funkcja wyświetlająca jedzenie w formacie tabeli
function displayCinemaMenu($items) {
    echo "<table class='table table-dark table-striped'>";
    echo "<thead>
            <tr>
                <th>Nazwa</th>
                <th>Small (PLN)</th>
                <th>Medium (PLN)</th>
                <th>Large (PLN)</th>
            </tr>
          </thead>";
    echo "<tbody>";
    foreach ($items as $item) {
        // Sprawdzenie, czy element posiada wszystkie rozmiary
        $sizes = $item['sizes'];
        echo "<tr>
                <td>{$item['name']}</td>
                <td>" . (isset($sizes['Small']) ? $sizes['Small'] : '-') . "</td>
                <td>" . (isset($sizes['Medium']) ? $sizes['Medium'] : '-') . "</td>
                <td>" . (isset($sizes['Large']) ? $sizes['Large'] : '-') . "</td>
              </tr>";
    }
    echo "</tbody>";
    echo "</table>";
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Kinowe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
        }
        .navbar {
            background-color: #ffc404 !important;
        }
        .navbar .navbar-brand, 
        .navbar .nav-link {
            color: black !important;
        }
        .navbar .nav-link:hover {
            color: white !important;
        }
        .btn-outline-light {
            border-color: white;
            color: white;
        }
        .btn-outline-light:hover {
            background-color: white;
            color: black;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Zmieniony napis na 'Menu' -->
            <a class="navbar-brand fw-bold" href="index.php">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="menu-cinema.php">Menu kinowe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order-online.php">Zamów online</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Menu Kinowe</h1>
        <?php displayCinemaMenu($cinemaMenu); ?>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-outline-light">Wróć na stronę główną</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>