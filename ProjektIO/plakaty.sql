CREATE TABLE plakaty (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unikalne ID dla każdego plakatu
    tytul VARCHAR(255) NOT NULL,      -- Tytuł filmu lub plakatu
    sciezka_pliku VARCHAR(255) NOT NULL, -- Ścieżka do pliku plakatu (np. "plakaty/trefliki.png")
    opis TEXT,                        -- Opcjonalny opis plakatu
    data_dodania TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data dodania plakatu
    kategoria VARCHAR(100) DEFAULT NULL -- Kategoria (np. "Dzieci", "Komedia", "Dramat")
);

INSERT INTO plakaty (tytul, sciezka_pliku, opis, kategoria)
VALUES
    ('Trefliki ratują święta', 'plakaty/trefliki.png', 'Rodzinna animacja o świątecznych przygodach Treflików.', 'Dzieci'),
    ('Dog Man', 'plakaty/dogman.png', 'Historia superbohatera w świecie psów.', 'Komedia'),
    ('Mufasa: Król Lew', 'plakaty/mufasa.png', 'Epicka opowieść o losach Mufasy.', 'Animacja'),
    ('Dziki Robot', 'plakaty/robot.png', 'Przygody robota w dzikim świecie.', 'Sci-Fi'),
    ('Zima mamy mu', 'plakaty/zimamamymu.png', 'Zimowa opowieść o Mamie Mu.', 'Dzieci'),
    ('Paddington w Peru', 'plakaty/paddingtonwperu.png', 'Nowe przygody misia Paddingtona.', 'Komedia'),
    ('Reniferek Niko i zaginione sanie mikołaja', 'plakaty/reniferniko.png', 'Świąteczna historia reniferka Niko.', 'Dzieci'),
    ('Vaiana 2', 'plakaty/Vaiana2.png', 'Kontynuacja przygód Vaiany na oceanie.', 'Animacja');
