<?php
// Bilet interfejs
interface Ticket {
    public function getPrice(): float;
    public function getDescription(): string;
}

// Klasy konkretnych biletów
class StandardTicket implements Ticket {
    public function getPrice(): float {
        return 20.0;  // cena biletu standardowego
    }

    public function getDescription(): string {
        return "Standardowy bilet do kina";
    }
}

class VipTicket implements Ticket {
    public function getPrice(): float {
        return 50.0;  // cena biletu VIP
    }

    public function getDescription(): string {
        return "VIP bilet z dostępem do strefy premium";
    }
}

class FamilyTicket implements Ticket {
    public function getPrice(): float {
        return 70.0;  // cena biletu rodzinnego
    }

    public function getDescription(): string {
        return "Bilet rodzinny (2 dorosłych + 2 dzieci)";
    }
}

// Fabryka biletów
class TicketFactory {
    public static function createTicket(string $type): Ticket {
        return match ($type) {
            'standard' => new StandardTicket(),
            'vip' => new VipTicket(),
            'family' => new FamilyTicket(),
            default => throw new Exception("Nieznany typ biletu: $type"),
        };
    }
}
?>