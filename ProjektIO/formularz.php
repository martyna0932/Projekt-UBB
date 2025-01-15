
<?php
// Odbierz dane z URL (przykładowo film)
$movie = isset($_GET['movie']) ? $_GET['movie'] : '';
$ticketType = isset($_GET['ticketType']) ? $_GET['ticketType'] : '';
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakup Biletów - Kino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    background-color: black;
    color: white;
}

.bg-black-content {
    background-color: black;
    padding: 20px;
    border-radius: 10px;
}

.seating-chart {
    display: grid;
    grid-template-columns: repeat(8, 50px);
    gap: 10px;
    justify-content: center;
    align-items: center;
}

.seat {
    width: 50px;
    height: 50px;
    font-size: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    border-radius: 5px;
    color: white;
    /*border: 2px solid #ffc404;*/
    background-color: black;
}

.seat.available {
    background-color: #05FF3F;
}


.seat.reserved {
    background-color: #FF051C;
}

.price-info {
    font-size: 18px;
    font-weight: bold;
}

.btn-custom {
    background-color: #ffc404;
    color: black;
    font-size: 16px;
    border-radius: 5px;
    transition: transform 0.3s ease;
}
/* Przyciski nawigacyjne */
.btn-back {
    color: #ffc404; /* Domyślny kolor żółty */
    font-weight: bold;
    text-decoration: none; /* Brak podkreślenia */
    font-size: 1.2rem;
    transition: color 0.3s ease; /* Płynna zmiana koloru tekstu */
    margin-right: 20px; /* Odstęp od prawej strony */
}

/* Efekt hover */
.btn-custom:hover {
    background-color: #D4A404; /* Ciemniejsze żółte tło */
    color: white; /* Biały tekst */
}

.btn-back:hover {
    color: #D4A404; /* Biały tekst przy najechaniu */
    text-decoration: underline; /* Podkreślenie przy najechaniu */
}
/* Dostosowanie kontenera przycisku */
.d-flex.justify-content-end {
    padding-right: 20px; /* Globalny odstęp dla kontenera */
}
    </style>
</head>
<body>
<div class="d-flex justify-content-end mt-3">
    <a href="index.php" class="btn btn-link btn-back">Wróć na stronę główną</a>
</div>
<div class="container mt-5 bg-black-content">
    <h2 class="text-center text-white mb-4">Zakup Biletów do Kina</h2>

    <form method="POST" action="buyTicket.php" id="ticketForm" class="bg-black-content p-4 rounded">
        <!-- Wybór filmu -->
        <div class="mb-3">
            <label for="movie" class="form-label text-white">Wybierz film:</label>
            <select name="movie" id="movie" class="form-select bg-black text-white" required>
                <option value="sonic3" <?php echo ($movie === 'sonic3') ? 'selected' : ''; ?>>Sonic 3 - Szybki jak błyskawica</option>
                <option value="avatar2" <?php echo ($movie === 'avatar2') ? 'selected' : ''; ?>>Avatar 2 - Istota wody</option>
                <option value="fastx" <?php echo ($movie === 'fastx') ? 'selected' : ''; ?>>Fast X</option>
                <option value="guardians" <?php echo ($movie === 'guardians') ? 'selected' : ''; ?>>Guardians of the Galaxy 3</option>
            </select>
        </div>

        <!-- Wybór rodzaju biletu -->
        <div class="mb-3">
            <label for="ticketType" class="form-label text-white">Rodzaj biletu:</label>
            <select name="ticketType" id="ticketType" class="form-select bg-black text-white" required onchange="updatePrice()">
                <option value="standard" <?php echo ($ticketType === 'standard') ? 'selected' : ''; ?>>Standardowy</option>
                <option value="vip" <?php echo ($ticketType === 'vip') ? 'selected' : ''; ?>>VIP</option>
                <option value="family" <?php echo ($ticketType === 'family') ? 'selected' : ''; ?>>Rodzinny</option>
            </select>
        </div>

        <!-- Ilość biletów -->
        <div class="mb-3">
            <label for="quantity" class="form-label text-white">Ilość biletów:</label>
            <input type="number" name="quantity" id="quantity" class="form-control bg-black text-white" value="<?php echo $quantity; ?>" min="1" required>
        </div>

        <!-- Siatka miejsc -->
        <div class="mb-3">
            <label class="form-label text-white">Wybierz miejsce:</label>
            <div class="seating-chart bg-black-content" id="seatingChart">
                <!-- Miejsca będą generowane dynamicznie przez JavaScript -->
            </div>
        </div>

        <div class="price-info text-center text-white">
            Cena biletu: <span id="ticketPrice">0 PLN</span>
        </div>

        <button type="submit" class="btn btn-custom mt-4 w-100">Kup Bilet</button>
    </form>

    <!-- Komunikat o zakupie -->
    <div id="purchaseMessage" class="alert alert-success mt-4 text-center" style="display: none;">
        Dziękujemy za zakup, płatność należy dokonać w kasie kina.
    </div>

  

<!-- Załaduj plik JavaScript -->
<script src="ticket.js"></script>
</body>
</html>
