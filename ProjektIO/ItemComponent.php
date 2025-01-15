<?php
// Interfejs dla komponentów jedzenia i napojów
interface ItemComponent {
    public function cost(); // Metoda zwracająca cenę
}

// Klasa reprezentująca popcorn
class Popcorn implements ItemComponent {
    private $size; // Rozmiar popcornu (Small, Medium, Large)

    public function __construct($size) {
        $this->size = $size;
    }

    public function cost() {
        // Cena popcornu zależna od rozmiaru
        if ($this->size == "Small") {
            return 5;
        } elseif ($this->size == "Medium") {
            return 7;
        } else {
            return 10;
        }
    }

    // Dodajemy metodę do wyświetlania szczegółów
    public function getDetails() {
        return "Popcorn ({$this->size}) - " . $this->cost() . " PLN";
    }
}

// Klasa reprezentująca napój (np. Cola, Woda)
class Drink implements ItemComponent {
    private $type; // Typ napoju (np. Cola, Woda)

    public function __construct($type) {
        $this->type = $type;
    }

    public function cost() {
        // Cena napoju zależna od typu
        if ($this->type == "Cola") {
            return 3;
        } else { // Inny napój, np. Woda
            return 2;
        }
    }

    // Dodajemy metodę do wyświetlania szczegółów
    public function getDetails() {
        return "{$this->type} - " . $this->cost() . " PLN";
    }
}

// Klasa reprezentująca zamówienie (kompozyt)
class Order implements ItemComponent {
    private $items = [];

    public function addItem(ItemComponent $item) {
        $this->items[] = $item; // Dodajemy element do zamówienia
    }

    public function cost() {
        $totalCost = 0;
        foreach ($this->items as $item) {
            $totalCost += $item->cost(); // Zliczamy cenę wszystkich elementów w zamówieniu
        }
        return $totalCost;
    }
}

// Klasa reprezentująca nachosy
class Nachosy implements ItemComponent {
    private $size; // Rozmiar nachosów (Small, Medium, Large)

    public function __construct($size) {
        $this->size = $size;
    }

    public function cost() {
        // Cena nachosów zależna od rozmiaru
        if ($this->size == "Small") {
            return 6;
        } elseif ($this->size == "Medium") {
            return 8;
        } else {
            return 11;
        }
    }
      // Dodajemy metodę do wyświetlania szczegółów
      public function getDetails() {
        return "Nachosy ({$this->size}) - " . $this->cost() . " PLN";
    }

}

// Klasa reprezentująca hot-doga
class HotDog implements ItemComponent {
    private $size; // Rozmiar hot doga (Standard, Jumbo)

    public function __construct($size) {
        $this->size = $size;
    }

    public function cost() {
        // Cena hot-doga zależna od rozmiaru
        if ($this->size == "Standard") {
            return 7;
        } else { // Jumbo
            return 10;
        }
    }

    // Dodajemy metodę do wyświetlania szczegółów
    public function getDetails() {
        return "Hot-Dog ({$this->size}) - " . $this->cost() . " PLN";
    }
}


// Tworzymy obiekty reprezentujące jedzenie i napoje
$popcorn1 = new Popcorn("Medium");
$popcorn2 = new Popcorn("Large");
$drink1 = new Drink("Cola");
$drink2 = new Drink("Water");

// Tworzymy zamówienie (kompozyt)
$order = new Order();
$order->addItem($popcorn1);  // Dodajemy popcorn
$order->addItem($drink1);    // Dodajemy napój (Cola)
$order->addItem($popcorn2);  // Dodajemy drugi popcorn
$order->addItem($drink2);    // Dodajemy napój (Woda)

// Obliczamy całkowity koszt zamówienia
echo "Całkowity koszt zamówienia: " . $order->cost() . " PLN\n";
?>
