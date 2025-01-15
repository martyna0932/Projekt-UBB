<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamów Online</title>
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
            margin-top: 100px; /* Odstęp od nagłówka */
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
        .form-label {
            color: white;
            font-size: 1.1rem;
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
        .form-select, .form-control {
            background-color: #444;
            color: white;
            border: 1px solid #555;
            font-size: 1rem;
        }
        .form-select:focus, .form-control:focus {
            background-color: #444;
            border-color: #ffc404;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 1rem;
            color: white;
        }
        /* Centralne pozycjonowanie przycisków */
        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
      
       
    </style>
</head>
<body>

    <div class="container mt-5">
        <h1>Zamów Online</h1>
        <p class="lead">Wybierz jedzenie i napój, które chcesz zamówić. Po złożeniu zamówienia potwierdzimy je, a Ty otrzymasz powiadomienie, gdy będzie gotowe.</p>

        <!-- Formularz do zamówienia -->
        <form action="order-summary.php" method="POST">
            
            <!-- Wybór popcornu -->
            <div class="form-group">
                <label for="popcorn-quantity" class="form-label">Ilość Popcornu</label>
                <input type="number" class="form-control" id="popcorn-quantity" name="popcorn-quantity" min="0" value="0">
                <label for="popcorn-size" class="form-label">Wybierz rozmiar Popcornu</label>
                <select class="form-select" id="popcorn-size" name="popcorn-size">
                    <option value="Small">Mały</option>
                    <option value="Medium">Średni</option>
                    <option value="Large">Duży</option>
                </select>
            </div>

            <!-- Wybór nachosów -->
            <div class="form-group">
                <label for="nachosy-quantity" class="form-label">Ilość Nachosów</label>
                <input type="number" class="form-control" id="nachosy-quantity" name="nachosy-quantity" min="0" value="0">
                <label for="nachosy-size" class="form-label">Wybierz rozmiar Nachosów</label>
                <select class="form-select" id="nachosy-size" name="nachosy-size">
                    <option value="Small">Mały</option>
                    <option value="Medium">Średni</option>
                    <option value="Large">Duży</option>
                </select>
            </div>

            <!-- Wybór hot-dogów -->
            <div class="form-group">
                <label for="hotdog-quantity" class="form-label">Ilość Hot-Dogów</label>
                <input type="number" class="form-control" id="hotdog-quantity" name="hotdog-quantity" min="0" value="0">
                <label for="hotdog-size" class="form-label">Wybierz rodzaj Hot-Doga</label>
                <select class="form-select" id="hotdog-size" name="hotdog-size">
                    <option value="Standard">Standard</option>
                    <option value="Jumbo">Jumbo</option>
                </select>
            </div>

            <!-- Wybór napojów -->
            <div class="form-group">
                <label for="cola-quantity" class="form-label">Ilość Coli</label>
                <input type="number" class="form-control" id="cola-quantity" name="cola-quantity" min="0" value="0">
                <label for="cola-size" class="form-label">Wybierz rozmiar Coli</label>
                <select class="form-select" id="cola-size" name="cola-size">
                    <option value="Small">Mały</option>
                    <option value="Medium">Średni</option>
                    <option value="Large">Duży</option>
                </select>
            </div>

            <div class="form-group">
                <label for="water-quantity" class="form-label">Ilość Wody</label>
                <input type="number" class="form-control" id="water-quantity" name="water-quantity" min="0" value="0">
            </div>

            <button type="submit" class="btn btn-primary w-100">Zobacz Podsumowanie</button>
        </form>

        <!-- Przycisk Powrót na stronę główną -->
        <div class="button-container">
            <a href="index.php" class="btn btn-outline-light">Wróć na stronę główną</a>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2025 Kino XYZ | Wszystkie prawa zastrzeżone</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
