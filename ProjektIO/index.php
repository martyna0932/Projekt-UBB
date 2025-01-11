<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polskie Kino Layout</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
                <button class="btn btn-link text-dark fw-bold" type="button" onclick="setActive(this)">OFERTY</button>
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


<div class="position-relative bg-dark">
    <!-- Tło dla filmu -->
    <div class="video-background">
        <div class="overlay"></div>
        <div class="ratio ratio-16x9">
            <iframe 
                src="https://www.youtube.com/embed/LH1J1EbqCaI?autoplay=1&mute=1&loop=1&playlist=LH1J1EbqCaI"
                title="Sonic 3 Trailer" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <!-- Tekst na filmie -->
    <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
        <h1 class="display-4 fw-bold">Sonic 3 - Szybki jak błyskawica</h1>
        <p class="lead">Piorunem wlatuje do kin w formatach ScreenX i 4DX!</p>
        <a href="#" class="btn btn-warning btn-lg px-5 py-3">Kup Bilet</a>
    </div>
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

<div class="container mt-5">
    <h2 class="text-left mb-4">Aktualności</h2>
    <div id="aktualnosciCarousel" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <!-- Aktualność 1 -->
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-dark border-0 text-white">
                            <div class="card-body">
                            <h5 class="card-title"><a href="aktualnosc1.html" class="text-warning">Nowości w repertuarze</a></h5>
                                <p class="card-text">Zobacz najnowsze filmy, które pojawiły się w naszym kinie! Już teraz dostępne w systemie rezerwacji.</p>
                                <p class="card-text"><small class="text-muted">Data: 09.01.2025</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Aktualność 2 -->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-dark border-0 text-white">
                            <div class="card-body">
                                <h5 class="card-title"><a href="aktualnosc2.html" class="text-warning">Promocje na bilety</a></h5>
                                <p class="card-text">Sprawdź nasze aktualne promocje na bilety! Skorzystaj z wyjątkowych ofert i ciesz się filmami w niższej cenie.</p>
                                <p class="card-text"><small class="text-muted">Data: 08.01.2025</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Aktualność 3 -->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-dark border-0 text-white">
                            <div class="card-body">
                                <h5 class="card-title"><a href="aktualnosc3.html" class="text-warning">Wydarzenia specjalne</a></h5>
                                <p class="card-text">Zarezerwuj bilety na wydarzenia specjalne, takie jak pokazy przedpremierowe, spotkania z twórcami i inne!</p>
                                <p class="card-text"><small class="text-muted">Data: 07.01.2025</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Aktualność 4 -->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-dark border-0 text-white">
                            <div class="card-body">
                                <h5 class="card-title"><a href="aktualnosc4.html" class="text-warning">Nowe technologie w kinie</a></h5>
                                <p class="card-text">Dowiedz się, jakie nowe technologie wprowadziliśmy w naszych kinach, aby zapewnić najlepsze doświadczenie kinowe!</p>
                                <p class="card-text"><small class="text-muted">Data: 06.01.2025</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Aktualność 5 -->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-dark border-0 text-white">
                            <div class="card-body">
                                <h5 class="card-title"><a href="aktualnosc5.html" class="text-warning">Bezpieczne kino w czasie pandemii</a></h5>
                                <p class="card-text">Zobacz jak dbamy o bezpieczeństwo naszych gości w czasie pandemii - nowe procedury i środki ostrożności w kinach.</p>
                                <p class="card-text"><small class="text-muted">Data: 05.01.2025</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Aktualność 6 -->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card bg-dark border-0 text-white">
                            <div class="card-body">
                                <h5 class="card-title"><a href="aktualnosc6.html" class="text-warning">Nowe filmy w 4DX</a></h5>
                                <p class="card-text">Zobacz filmy w nowoczesnym formacie 4DX, które zapewnią ci niesamowite wrażenia podczas projekcji!</p>
                                <p class="card-text"><small class="text-muted">Data: 04.01.2025</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kontrolki karuzeli -->
        <button class="carousel-control-prev" type="button" data-bs-target="#aktualnosciCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Poprzedni</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#aktualnosciCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Następny</span>
        </button>
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

<footer class="bg-orange text-white py-4 mt-5">
    <div class="container">
        <div class="row justify-content-center">

            
           <!-- Social Media Section -->
           <div class="col-md-5 text-center mb-4">
                <h5>Social Media</h5>
                <div class="d-flex justify-content-center">
                    <div class="mx-3">
                        <a href="https://www.instagram.com/" class="text-white d-block">
                            <img src="icons/instagram.png" alt="Instagram" style="width: 48px; height: 48px;">
                            <p>Instagram</p>
                        </a>
                    </div>
                    <div class="mx-3">
                        <a href="https://www.facebook.com/" class="text-white d-block">
                            <img src="icons/facebook.png" alt="Facebook" style="width: 48px; height: 48px;">
                            <p>Facebook</p>
                        </a>
                    </div>
                    <div class="mx-3">
                        <a href="https://twitter.com/" class="text-white d-block">
                            <img src="icons/twitter.png" alt="Twitter" style="width: 48px; height: 48px;">
                            <p>Twitter</p>
                        </a>
                    </div>
                    <div class="mx-3">
                        <a href="https://www.youtube.com/" class="text-white d-block">
                            <img src="icons/youtube.png" alt="YouTube" style="width: 48px; height: 48px;">
                            <p>YouTube</p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Nasze Kino Section (with "O nas", "Kariera", "Mapa kina") -->
            <div class="col-md-5 text-center mb-4">
                <h5>Nasze Kino</h5>
                <ul class="list-unstyled">
                    <li class="d-flex justify-content-center">
                        <a href="o-nas.html" class="text-white d-flex align-items-center">
                            O nas
                            <img src="icons/arrow.png" alt="Arrow" style="width: 16px; height: 16px; margin-left: 8px;">
                        </a>
                    </li>
                    <li class="d-flex justify-content-center">
                        <a href="kariera.html" class="text-white d-flex align-items-center">
                            Kariera
                            <img src="icons/arrow.png" alt="Arrow" style="width: 16px; height: 16px; margin-left: 8px;">
                        </a>
                    </li>
                    <li class="d-flex justify-content-center">
                        <a href="mapa-kina.html" class="text-white d-flex align-items-center">
                            Mapa kina
                            <img src="icons/arrow.png" alt="Arrow" style="width: 16px; height: 16px; margin-left: 8px;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Thin line before the next section -->
        <hr class="my-3" style="border-color: #fff;">

        <!-- Linki Section (Now in a row) -->
        <div class="col-md-12 text-center mb-4">
            <ul class="list-unstyled d-flex justify-content-center">
            <li class="mx-3">
    <!-- Кнопка для открытия модального окна -->
    <button type="button" class="btn btn-link text-white text-decoration-underline" data-bs-toggle="modal" data-bs-target="#contactModal" style="text-decoration: underline; font-size: 0.875rem; padding: 0; line-height: 1;">
        Kontakt do nas
    </button>
</li>

<!-- Модальное окно -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="background-color: #000; color: #FFF; border-radius: 8px;">
            <!-- Заголовок окна -->
            <div class="modal-header" style="border-bottom: 1px solid  #ffc404;">
                <h5 class="modal-title" id="contactModalLabel" style="color:  #ffc404;">Kontakt do nas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
            </div>
            <!-- Тело окна -->
            <div class="modal-body">
                <p><strong>Telefon:</strong></p>
                <ul>
                    <li>+48 123 456 789</li>
                    <li>+48 987 654 321</li>
                </ul>
                <p><strong>Adres:</strong></p>
                <p>ul. Nowa 15, 00-001 Warszawa</p>
            </div>
            <!-- Кнопка закрытия -->
            <div class="modal-footer" style="border-top: 1px solid  #ffc404;">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" style="background-color: #444; color: #FFF; border: none;">Zamknij</button>
            </div>
        </div>
    </div>
</div>


                <li class="mx-3"><a href="regulamin.html" class="text-white small">Regulamin</a></li>
                <li class="mx-3"><a href="polityka-prywatnosci.html" class="text-white small">Polityka prywatności</a></li>
                <li class="mx-3"><a href="pomoc.html" class="text-white small">Pomoc</a></li>
            </ul>
        </div>

        <!-- Thin line before copyright -->
        <hr class="my-3" style="border-color: #fff;">

        <!-- Copyright -->
        <p class="mt-3 text-center">&copy; 2025 Polskie Kino. Wszystkie prawa zastrzeżone.</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
