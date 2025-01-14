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
    <style>
       /* Stylizacja formularza */
.seating-chart {
    display: grid;
    grid-template-columns: repeat(8, 50px); /* 8 kolumn */
    gap: 10px;
    margin-top: 20px;
    justify-content: center; /* Wyśrodkowanie w poziomie */
    align-items: center;     /* Wyśrodkowanie w pionie */
    margin-left: auto;
    margin-right: auto;
}

.seating-chart-container {
    display: flex;
    justify-content: center; /* Wyśrodkowanie w poziomie */
    align-items: center;     /* Wyśrodkowanie w pionie */
    height: 100%;            /* Aby kontener zajmował pełną wysokość */
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
        }
        .seat.available {
            background-color: #28a745; /* Zielony dla dostępnych */
        }
        .seat.selected {
            background-color: #007bff; /* Niebieski dla wybranego */
        }
        .seat.reserved {
            background-color: #dc3545; /* Czerwony dla zarezerwowanych */
        }
        .seat:hover {
            transform: scale(1.1);
            transition: all 0.2s ease;
        }
        .seat.selected:hover {
            background-color: #0056b3;
        }
        .price-info {
            font-size: 18px;
            font-weight: bold;
            margin-top: 15px;
        }
        .btn-custom {
            background-color: #ffc107;
            color: white;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .btn-custom:hover {
            background-color: #e0a800;
        }
        #reservationMessage {
    margin-top: 20px;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    background-color: #17a2b8; /* Kolor tła niebieski */
    color: white;
    padding: 10px;
    border-radius: 5px;
}
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Zakup Biletów do Kina</h2>

    <form method="POST" action="buyTicket.php" id="ticketForm">
        <!-- Wybór filmu -->
        <div class="mb-3">
            <label for="movie" class="form-label">Wybierz film:</label>
            <select name="movie" id="movie" class="form-select" required>
                <option value="sonic3" <?php echo ($movie === 'sonic3') ? 'selected' : ''; ?>>Sonic 3 - Szybki jak błyskawica</option>
                <option value="avatar2" <?php echo ($movie === 'avatar2') ? 'selected' : ''; ?>>Avatar 2 - Istota wody</option>
                <option value="fastx" <?php echo ($movie === 'fastx') ? 'selected' : ''; ?>>Fast X</option>
                <option value="guardians" <?php echo ($movie === 'guardians') ? 'selected' : ''; ?>>Guardians of the Galaxy 3</option>
            </select>
        </div>

        <!-- Wybór rodzaju biletu -->
        <div class="mb-3">
            <label for="ticketType" class="form-label">Rodzaj biletu:</label>
            <select name="ticketType" id="ticketType" class="form-select" required onchange="updatePrice()">
                <option value="standard" <?php echo ($ticketType === 'standard') ? 'selected' : ''; ?>>Standardowy</option>
                <option value="vip" <?php echo ($ticketType === 'vip') ? 'selected' : ''; ?>>VIP</option>
                <option value="family" <?php echo ($ticketType === 'family') ? 'selected' : ''; ?>>Rodzinny</option>
            </select>
        </div>

        <!-- Ilość biletów -->
        <div class="mb-3">
            <label for="quantity" class="form-label">Ilość biletów:</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="<?php echo $quantity; ?>" min="1" required>
        </div>

        <!-- Siatka miejsc -->
        <div class="mb-3">
            <label class="form-label">Wybierz miejsce:</label>
            <div class="seating-chart" id="seatingChart">
                <!-- Miejsca będą generowane dynamicznie przez JavaScript -->
            </div>
        </div>

        <div class="price-info">
            Cena biletu: <span id="ticketPrice">0 PLN</span>
        </div>

        <button type="submit" class="btn btn-custom mt-4">Kup Bilet</button>
    </form>

    <!-- Komunikat o zakupie -->
    <div id="purchaseMessage" class="alert alert-success" style="display: none;">
        Dziękujemy za zakup, płatność należy dokonać w kasie kina.
    </div>
</div>

<!-- Załaduj plik JavaScript -->
<script src="ticket.js"></script>
</body>
</html>