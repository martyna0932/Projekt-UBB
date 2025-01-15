<?php 
// Pobranie kategorii z URL
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Dane dla napojów i deserów
$drinks = [
    ['name' => 'Cola', 'sizes' => ['Small' => 3, 'Medium' => 5, 'Large' => 7]],
    ['name' => 'Woda', 'sizes' => ['Small' => 2, 'Medium' => 3, 'Large' => 4]]
];

$desserts = [
    ['name' => 'Lody', 'sizes' => ['Small' => 5, 'Medium' => 7, 'Large' => 10]],
    ['name' => 'Ciasto', 'sizes' => ['Small' => 6, 'Medium' => 8, 'Large' => 12]]
];

// Funkcja wyświetlająca napoje w formacie tabeli
function displayDrinks($drinks) {
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
    foreach ($drinks as $drink) {
        echo "<tr>
                <td>{$drink['name']}</td>
                <td>{$drink['sizes']['Small']}</td>
                <td>{$drink['sizes']['Medium']}</td>
                <td>{$drink['sizes']['Large']}</td>
              </tr>";
    }
    echo "</tbody>";
    echo "</table>";
}

// Funkcja wyświetlająca desery w formacie tabeli
function displayDesserts($desserts) {
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
    foreach ($desserts as $dessert) {
        echo "<tr>
                <td>{$dessert['name']}</td>
                <td>{$dessert['sizes']['Small']}</td>
                <td>{$dessert['sizes']['Medium']}</td>
                <td>{$dessert['sizes']['Large']}</td>
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
    <title>Menu - Bar</title>
    <!-- Bootstrap CSS -->
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
            <a class="navbar-brand fw-bold" href="menu.php">Bar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php?category=drinks">Napije</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php?category=desserts">Desery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <?php if ($category == 'drinks'): ?>
            <h2 class="text-center mb-4">Napije</h2>
            <?php displayDrinks($drinks); ?>
            <div class="text-center mt-4">
                <a href="index.php" class="btn btn-outline-light">Wróć na stronę główną</a>
            </div>
        <?php elseif ($category == 'desserts'): ?>
            <h2 class="text-center mb-4">Desery</h2>
            <?php displayDesserts($desserts); ?>
            <div class="text-center mt-4">
                <a href="index.php" class="btn btn-outline-light">Wróć na stronę główną</a>
            </div>
        <?php else: ?>
            <h2 class="text-center mb-4">Witamy w Barze!</h2>
            <p class="text-center">Wybierz kategorię z menu powyżej.</p>
        <?php endif; ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
