CREATE TABLE posters (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unikalne ID dla każdego plakatu
    tytul VARCHAR(255) NOT NULL,      -- Tytuł filmu lub plakatu
    sciezka_pliku VARCHAR(255) NOT NULL, -- Ścieżka do pliku plakatu (np. "plakaty/trefliki.png")
    opis TEXT,                        -- Opcjonalny opis plakatu
    data_dodania TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data dodania plakatu
    kategoria VARCHAR(100) DEFAULT NULL -- Kategoria (np. "Dzieci", "Komedia", "Dramat")
);

INSERT INTO posters (tytul, sciezka_pliku, opis, kategoria)
VALUES
    ('Trefliki ratują święta', 'images/trefliki.png', 'Rodzinna animacja o świątecznych przygodach Treflików.', 'Dzieci'),
    ('Dog Man', 'images/dogman.png', 'Historia superbohatera w świecie psów.', 'Komedia'),
    ('Mufasa: Król Lew', 'images/mufasa.png', 'Epicka opowieść o losach Mufasy.', 'Animacja'),
    ('Dziki Robot', 'images/robot.png', 'Przygody robota w dzikim świecie.', 'Sci-Fi'),
    ('Zima mamy mu', 'images/zimamamymu.png', 'Zimowa opowieść o Mamie Mu.', 'Dzieci'),
    ('Paddington w Peru', 'images/paddingtonwperu.png', 'Nowe przygody misia Paddingtona.', 'Komedia'),
    ('Reniferek Niko i zaginione sanie mikołaja', 'images/reniferniko.png', 'Świąteczna historia reniferka Niko.', 'Dzieci'),
    ('Vaiana 2', 'images/Vaiana2.png', 'Kontynuacja przygód Vaiany na oceanie.', 'Animacja');
