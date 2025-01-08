<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polskie Kino Layout</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: black; color: white;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand" href="#">Polskie Kino</a>
            <div class="ms-auto d-flex align-items-center">
      <!-- Przyciski Zaloguj się i Zarejestruj się -->
      <a class="btn btn-outline-light me-2" href="login.html">Zaloguj się</a>
            <a class="btn btn-light" href="register.html">Rejestracja</a>
            </div>
        </div>
    </nav>


    <div class="navbar navbar-expand-lg navbar-dark bg-warning text-dark">
    <div class="container">
        <ul class="navbar-nav mx-auto justify-content-center">
        <li class="nav-item">
                <button class="btn btn-link text-dark fw-bold" type="button" onclick="setActive(this)">VIP</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark fw-bold" type="button" onclick="setActive(this)">REPERTUAR</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark fw-bold" type="button" onclick="setActive(this)">UNLIMITED</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark fw-bold" type="button" onclick="setActive(this)">PREZENTY</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark fw-bold" type="button" onclick="setActive(this)">JEDZENIE</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark fw-bold" type="button" onclick="setActive(this)">Oferty</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark fw-bold" type="button" onclick="setActive(this)">BLOG</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-link text-dark fw-bold" type="button" onclick="setActive(this)">BAR</button>
            </li>
        </ul>
    </div>
</div>


<div class="container-fluid bg-black text-white text-center py-5">
        <h1>Sonic 3 - Szybki jak błyskawica</h1>
        <p>Piorunem wlatuje do kin w formatach ScreenX i 4DX!</p>
        <button class="btn btn-warning btn-lg">Kup Bilet</button>
</div>



<div class="container mt-5 bg-black-content">
    <h2 class="text-center mb-4">NA EKRANIE</h2>
    <div class="row justify-content-center gx-3 gy-4">
        <?php
        include 'connect.php';
        foreach ($posters as $poster): ?>
            <div class="col-md-3 d-flex justify-content-center">
                <div class="card bg-black border-0">
                    <img class="card-img-top" src="<?php echo htmlspecialchars($poster['sciezka_pliku']); ?>" alt="<?php echo htmlspecialchars($poster['tytul']); ?>" style="height: 300px; object-fit: cover;">
                    <div class="card-body bg-black text-light text-center">
                        <p class="card-title mb-0"><?php echo htmlspecialchars($poster['tytul']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="newsletter-container">
    <h2>Newsletter</h2>
    <p>Bądź na bieżąco z najnowszymi premierami, wydarzeniami i ofertami specjalnymi, kuponami rabatowymi!</p>
    <form action="#" method="post">
        <div class="input-group">
            <input type="email" name="email" placeholder="Podaj swój adres e-mail" required>
            <button type="submit" class="btn-submit">Zapisz mnie</button>
        </div>
    </form>
    <small>
        Podanie adresu e-mail oznacza wyrażenie zgody na otrzymywanie informacji handlowych o charakterze marketingowym, w tym dotyczących repertuaru, wydarzeń i konkursów organizowanych przez Helios S.A. wysyłanych za pomocą środków komunikacji elektronicznej przez Helios S.A. Administratorem danych osobowych jest Helios S.A. z siedzibą w Łodzi (90-318) przy ul. Sienkiewicza 82/84. Pani/Pana dane będą przetwarzane w celu wykonania zamówionej usługi. Więcej informacji na temat przetwarzania danych osobowych znajduje się w Polityce Prywatności.
    </small>
</div>

    <footer class="bg-orange text-white text-center py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Linki</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Kontakt do nas</a></li>
                        <li><a href="#" class="text-white">Regulamin</a></li>
                        <li><a href="#" class="text-white">Polityka prywatności</a></li>
                        <li><a href="#" class="text-white">Pomoc</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Social Media</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Facebook</a></li>
                        <li><a href="#" class="text-white">Instagram</a></li>
                        <li><a href="#" class="text-white">Twitter</a></li>
                        <li><a href="#" class="text-white">YouTube</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Nasze Kino</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">O nas </a></li>
                        <li><a href="#" class="text-white">Kariera</a></li>
                        <li><a href="#" class="text-white">Mapa kina</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="mt-4">&copy; 2025 Polskie Kino. Wszystkie prawa zastrzeżone.</p>
    </footer>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
