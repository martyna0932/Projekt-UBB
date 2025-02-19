
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polskie Kino Layout</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: black; color: white;">

    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Polskie Kino</a>
            <div class="ms-auto d-flex align-items-center">
      <!-- Przyciski Zaloguj się i Zarejestruj się -->
      <a class="btn btn-outline-light me-2 fw-bold" href="login.html">Zaloguj się</a>
            <a class="btn btn-light fw-bold" href="register.html">Rejestracja</a>
            </div>
        </div>
    </nav>   
<!-- Przyciski z rozwijanym menu -->
<div class="navbar navbar-expand-lg navbar-dark bg-warning text-dark">
        <div class="container">
            <ul class="navbar-nav mx-auto justify-content-center">
                <!-- VIP Dropdown -->
                <li class="nav-item dropdown">
                    <button class="btn btn-link text-dark fw-bold dropdown-toggle" id="vipDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        VIP
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="vipDropdown">
                        <li><a class="dropdown-item" href="#">Strefa VIP</a></li>
                        <li><a class="dropdown-item" href="#">Ekskluzywne seanse</a></li>
                        <li><a class="dropdown-item" href="#">Pakiety VIP</a></li>
                    </ul>
                </li>
                <!-- Repertuar Dropdown -->
                <li class="nav-item dropdown">
                    <button class="btn btn-link text-dark fw-bold dropdown-toggle" id="repertuarDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        REPERTUAR
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="repertuarDropdown">
                        <li><a class="dropdown-item" href="#">Aktualny Repertuar</a></li>
                        <li><a class="dropdown-item" href="#">Premiery</a></li>
                        <li><a class="dropdown-item" href="#">Klasyki kina</a></li>
                    </ul>
                </li>
                <!-- Unlimited Dropdown -->
                <li class="nav-item dropdown">
                    <button class="btn btn-link text-dark fw-bold dropdown-toggle" id="unlimitedDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        UNLIMITED
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="unlimitedDropdown">
                        <li><a class="dropdown-item" href="#">Pakiet Unlimited</a></li>
                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                        <li><a class="dropdown-item" href="#">Rejestracja</a></li>
                    </ul>
                </li>
                <!-- Prezenty Dropdown -->
                <li class="nav-item dropdown">
                    <button class="btn btn-link text-dark fw-bold dropdown-toggle" id="prezentyDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PREZENTY
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="prezentyDropdown">
                        <li><a class="dropdown-item" href="#">Karty Podarunkowe</a></li>
                        <li><a class="dropdown-item" href="#">Pomysły na prezent</a></li>
                    </ul>
                </li>
               <!-- Jedzenie Dropdown -->
<li class="nav-item dropdown">
    <button class="btn btn-link text-dark fw-bold dropdown-toggle" id="jedzenieDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        JEDZENIE
    </button>
    <ul class="dropdown-menu" aria-labelledby="jedzenieDropdown">
        <li><a class="dropdown-item" href="menu-cinema.php">Menu kinowe</a></li> <!-- Link do Menu kinowego -->
        <li><a class="dropdown-item" href="order-online.php">Zamów online</a></li> <!-- Link do Zamów online -->
    </ul>
</li>
                <!-- Oferty Dropdown -->
                <li class="nav-item dropdown">
                    <button class="btn btn-link text-dark fw-bold dropdown-toggle" id="ofertyDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        OFERTY
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="ofertyDropdown">
                        <li><a class="dropdown-item" href="#">Promocje</a></li>
                        <li><a class="dropdown-item" href="#">Pakiety grupowe</a></li>
                    </ul>
                </li>
                <!-- Blog Dropdown -->
                <li class="nav-item dropdown">
                    <button class="btn btn-link text-dark fw-bold dropdown-toggle" id="blogDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        BLOG
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                        <li><a class="dropdown-item" href="#">Ostatnie wpisy</a></li>
                        <li><a class="dropdown-item" href="#">Popularne tematy</a></li>
                    </ul>
                </li>
                <!-- Bar Dropdown -->
<li class="nav-item dropdown">
    <button class="btn btn-link text-dark fw-bold dropdown-toggle" id="barDropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        BAR
    </button>
    <ul class="dropdown-menu" aria-labelledby="barDropdown">
        <li><a class="dropdown-item" href="menu.php?category=drinks">Napije</a></li> <!-- Link do napojów -->
        <li><a class="dropdown-item" href="menu.php?category=desserts">Desery</a></li> <!-- Link do deserów -->
    </ul>
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
<!-- Tekst na filmie -->
<div class="position-absolute top-50 start-50 translate-middle text-center text-white">
    <h1 class="display-4 fw-bold">Sonic 3 - Szybki jak błyskawica</h1>
    <p class="lead">Piorunem wlatuje do kin w formatach ScreenX i 4DX!</p>
    <a href="formularz.php" class="btn btn-warning btn-lg px-5 py-3" id="buyTicketBtn">Kup Bilet</a>
</div>
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
    <form action="#" method="post" onsubmit="showPopup(event)">
        <div class="input-group">
            <input type="email" name="email" placeholder="Podaj swój adres e-mail" required>
            <button type="submit" class="btn-submit">Zapisz mnie</button>
        </div>
    </form>
    <small>
    Podanie adresu e-mail oznacza wyrażenie zgody na otrzymywanie informacji handlowych o charakterze marketingowym, w tym dotyczących repertuaru, wydarzeń i konkursów organizowanych przez Polskie Kino S.A. wysyłanych za pomocą środków komunikacji elektronicznej przez Polskie Kino S.A. Administratorem danych osobowych jest Polskie Kino S.A. z siedzibą w Łodzi (90-318) przy ul. Sienkiewicza 82/84. Pani/Pana dane będą przetwarzane w celu wykonania zamówionej usługi. Więcej informacji na temat przetwarzania danych osobowych znajduje się w Polityce Prywatności.
</small>

</div>

<div id="popup" class="popup">
    <p>Twoją pocztę zapisano. Dziękujemy, że jesteś z nami!</p>
</div>

<style>
    .popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 20px;
        border-radius: 8px;
        display: none;
        opacity: 0;
        z-index: 1000;
        transition: opacity 1s ease-in-out;
    }
    .popup p {
        margin: 0;
        font-size: 16px;
    }
</style>

<script>
    function showPopup(event) {
        event.preventDefault();  // Prevent form submission for demonstration purposes
        
        const popup = document.getElementById('popup');
        popup.classList.add('show');  // Show the popup with animation

        setTimeout(() => {
            popup.classList.remove('show');  // Hide the popup with animation
        }, 3000);  // Popup disappears after 3 seconds
    }
</script>



<footer class="bg-orange text-white py-4 mt-5">
    <div class="container">
        <!-- Używamy flexboxa w row dla układu obok siebie -->
        <div class="row d-flex justify-content-between">

        <div class="col-md-4 text-center mb-4">
    <h5 class="text-dark ">Obserwuj nas</h5>
    <div class="d-flex flex-column align-items-center"> <!-- Zmienione z 'd-flex justify-content-center' na 'd-flex flex-column align-items-center' -->
        <div class="d-flex align-items-center mx-3 mb-2 justify-content-center text-dark"> <!-- Zmienione 'd-flex flex-column' na 'd-flex' i 'align-items-center' -->
            <a href="ig.html" class="d-flex align-items-center ">
                <img src="icons/ig.png" alt="Instagram" style="width: 18px; height: 18px; margin-right: 8px;">
                <p class="text-dark mb-0">Instagram</p>
            </a>
        </div>
        <div class="d-flex align-items-center mx-3 mb-2 justify-content-center text-dark">
            <a href="fb.html" class="d-flex align-items-center">
                <img src="icons/fb.png" alt="Facebook" style="width: 18px; height: 18px; margin-right: 8px;">
                <p class="text-dark mb-0">Facebook</p>
            </a>
        </div>
        <div class="d-flex align-items-center mx-3 mb-2 justify-content-center text-dark">
            <a href="tw.html" class=" d-flex align-items-center">
                <img src="icons/tw.png" alt="Twitter" style="width: 18px; height: 18px; margin-right: 8px;">
                <p class="text-dark mb-0">Twitter</p>
            </a>
        </div>
        <div class="d-flex align-items-center mx-3 mb-2 justify-content-center text-dark">
            <a href="yt.html" class=" d-flex align-items-center">
                <img src="icons/yt.png" alt="YouTube" style="width: 18px; height: 18px; margin-right: 8px;">
                <p class="text-dark mb-0">YouTube</p>
            </a>
        </div>
    </div>
</div>


            <!-- Nasze Kino Section -->
            <div class="col-md-4 text-center mb-4">
                <h5 class="text-dark ">NASZE KINO</h5>
                <ul class="list-unstyled">
                    <li class="d-flex justify-content-center text-dark">
                        <a href="o-nas.html" class="text-dark d-flex align-items-center">
                            O nas
                            
                        </a>
                    </li>
                    <li class="d-flex justify-content-center text-dark">
                        <a href="kariera.html" class="text-dark d-flex align-items-center">
                            Kariera
                            
                        </a>
                    </li>
                    <li class="d-flex justify-content-center text-dark">
    <button type="button" class="btn btn-link text-dark d-flex align-items-center text-decoration-none" data-bs-toggle="modal" data-bs-target="#cinemaMapModal" style="font-size: 1rem; padding: 0; line-height: 1;">
        Mapa kina
    </button>
</li>

<!-- Modal for Cinema Map -->
<div class="modal fade" id="cinemaMapModal" tabindex="-1" aria-labelledby="cinemaMapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #000; color: #FFF; border-radius: 8px;">
            <!-- Modal Header -->
            <div class="modal-header" style="border-bottom: 1px solid #ffc404;">
                <h5 class="modal-title" id="cinemaMapModalLabel" style="color: #ffc404;">Mapa Kina</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
            </div>
            <!-- Modal Body with the Cinema Map Image -->
            <div class="modal-body">
                <img src="icons/mapa-kina.png" alt="Mapa kina" class="img-fluid" />
                <p class="text-center mt-3" style="font-size: 0.875rem;">Testowa wersja</p>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer" style="border-top: 1px solid #ffc404;">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" style="background-color: #444; color: #FFF; border: none;">Zamknij</button>
            </div>
        </div>
    </div>
</div>

                </ul>
            </div>

            <!-- Informacje Section -->
            <div class="col-md-4 text-center mb-4">
                <h5 class="text-dark ">INFORMACJE</h5>
                <ul class="list-unstyled">
                
                <li class="d-flex justify-content-center text-dark">
    <button type="button" class="btn btn-link text-dark d-flex align-items-center text-decoration-none" data-bs-toggle="modal" data-bs-target="#contactModal" style="font-size: 1rem; padding: 0; line-height: 1;">
        Kontakt do nas
    </button>
</li>


<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content" style="background-color: #000; color: #FFF; border-radius: 8px;">
            
            <div class="modal-header" style="border-bottom: 1px solid #ffc404;">
                <h5 class="modal-title" id="contactModalLabel" style="color: #ffc404;">Kontakt do nas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
            </div>
          
            <div class="modal-body">
                <p><strong>Telefon:</strong></p>
                <ul>
                    <li>+48 123 456 789</li>
                    <li>+48 987 654 321</li>
                </ul>
                <p><strong>Adres:</strong></p>
                <p>ul. Nowa 15, 00-001 Warszawa</p>
            </div>
            
            <div class="modal-footer" style="border-top: 1px solid #ffc404;">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" style="background-color: #444; color: #FFF; border: none;">Zamknij</button>
            </div>
        </div>
    </div>
</div>

<li class="d-flex justify-content-center text-dark">
    <button type="button" class="btn btn-link text-dark text-decoration-none d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#regulaminModal">
        Regulamin
    </button>
</li>

<div class="modal fade" id="regulaminModal" tabindex="-1" aria-labelledby="regulaminModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="background-color: #000; color: #fff;">
           
            <div class="modal-header" style="background-color: #000; color: #fff;">
                <h5 class="modal-title" id="regulaminModalLabel" style="color: #ffc404;">Regulamin</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           
            <div class="modal-body" style="background-color: #000; color: #fff;">
                <h6 style="color: #ffc404;"><strong>1. Ogólne postanowienia</strong></h6>
                <p>1.1. Regulamin określa zasady korzystania z usług oferowanych przez kino "Polskie Kino".</p>
                <p>1.2. Każdy klient, dokonując zakupu biletu lub korzystając z usług kina, zobowiązuje się do przestrzegania niniejszego regulaminu.</p>
                <p>1.3. Kino zastrzega sobie prawo do zmian w regulaminie, o których klienci będą informowani za pośrednictwem strony internetowej oraz informacji na terenie obiektu.</p>
                
                <h6 style="color: #ffc404;"><strong>2. Zakup biletów</strong></h6>
                <p>2.1. Bilety można zakupić w kasie kina, za pośrednictwem strony internetowej, a także w aplikacji mobilnej.</p>
                <p>2.2. Zakupione bilety nie podlegają zwrotowi, chyba że seans zostanie odwołany z winy kina.</p>
                <p>2.3. Każdy bilet jest ważny wyłącznie na wskazany seans, datę i godzinę.</p>

                <h6 style="color: #ffc404;"><strong>3. Zasady uczestnictwa w seansach</strong></h6>
                <p>3.1. Klient zobowiązany jest do punktualnego przybycia na seans.</p>
                <p>3.2. Spóźnieni widzowie mogą nie zostać wpuszczeni na salę kinową, aby nie zakłócać seansu innym uczestnikom.</p>
                <p>3.3. Na terenie sali kinowej obowiązuje zakaz:</p>
                <ul>
                    <li>używania telefonów komórkowych,</li>
                    <li>rejestrowania obrazu i dźwięku,</li>
                    <li>spożywania alkoholu i palenia papierosów.</li>
                </ul>

                <h6 style="color: #ffc404;"><strong>4. Rezerwacje i miejsca</strong></h6>
                <p>4.1. Rezerwacja biletów jest możliwa online lub telefonicznie.</p>
                <p>4.2. Zarezerwowane bilety należy odebrać najpóźniej 30 minut przed rozpoczęciem seansu.</p>
                <p>4.3. Kino zastrzega sobie prawo do anulowania rezerwacji, jeśli bilety nie zostaną odebrane w terminie.</p>
            </div>
            
            <div class="modal-footer" style="background-color: #000; color: #fff;">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Zamknij</button>
            </div>
        </div>
    </div>
</div>


                    <li class="d-flex justify-content-center text-dark">
                        <a href="polityka.html" class="text-dark d-flex align-items-center">
                            Polityka prywatności
                        </a>
                    </li>
                    <li class="d-flex justify-content-center text-dark">
                        <a href="pomoc.html" class="text-dark d-flex align-items-center">
                            Pomoc
                        </a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Thin line before the next section -->
        <hr class="my-3" style="border-color: #fff;">

        <!-- Linki Section (Now in a row) -->
        <div class="col-md-12 text-center mb-4">
            <h5 class="text-dark";>POBIERZ APLIKACJE</h5>
            <ul class="list-unstyled d-flex justify-content-center">
                <li class="mx-3 text-dark"><a href="1.html" class="text-dark small ">Android</a></li>
                <li class="mx-3 text-dark"><a href="1" class="text-dark small ">iOS</a></li>
               
            </ul>
        </div>

        <!-- Thin line before copyright -->
        <hr class="my-3" style="border-color: #fff;">

        <!-- Copyright -->
        <p class="mt-3 text-center text-dark fw-bold" style="font-size: 12px;">&copy; 2025 Polskie Kino. Wszystkie prawa zastrzeżone.</p>

    </div>
</footer>
    <script src="script.js"></script>
</body>
</html>
