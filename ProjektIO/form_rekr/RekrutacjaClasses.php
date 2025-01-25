<?php
// Interfejs Rekrutacyjny
interface RecruitmentApplication {
    public function getPosition(): string;
    public function getDetails(): string;
}

// Klasy konkretnych aplikacji
class PersonelApplication implements RecruitmentApplication {
    public function getPosition(): string {
        return "Personel Obsługi Kina";
    }

    public function getDetails(): string {
        return "Aplikacja na stanowisko: Personel Obsługi Kina.";
    }
}

class KoordynatorApplication implements RecruitmentApplication {
    public function getPosition(): string {
        return "Koordynator Zespołu";
    }

    public function getDetails(): string {
        return "Aplikacja na stanowisko: Koordynator Zespołu.";
    }
}

class TrenerApplication implements RecruitmentApplication {
    public function getPosition(): string {
        return "Trener Wewnętrzny";
    }

    public function getDetails(): string {
        return "Aplikacja na stanowisko: Trener Wewnętrzny.";
    }
}

class SpecjalistaApplication implements RecruitmentApplication {
    public function getPosition(): string {
        return "Specjalista ds. Sprzedaży";
    }

    public function getDetails(): string {
        return "Aplikacja na stanowisko: Specjalista ds. Sprzedaży.";
    }
}


class RecruitmentFactory {
    public static function createApplication(string $position): RecruitmentApplication {
        return match ($position) {
            'personel' => new PersonelApplication(),
            'koordynator' => new KoordynatorApplication(),
            'trener' => new TrenerApplication(),
            'specjalista' => new SpecjalistaApplication(),
            default => throw new Exception("Nieznane stanowisko: $position"),
        };
    }
}
?>
