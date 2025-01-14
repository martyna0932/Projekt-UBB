// ticket.js

// Funkcja do obsługi formularza po kliknięciu "Kup Bilet"
document.getElementById('ticketForm').addEventListener('submit', function (event) {
    event.preventDefault();  // Zatrzymuje domyślne wysłanie formularza

    // Ukrywamy formularz
    document.getElementById('ticketForm').style.display = 'none';

    // Pokazujemy komunikat o dokonanym zakupie
    document.getElementById('purchaseMessage').style.display = 'block';
});

// Zaktualizowana tabela cen
const ticketPrices = {
    sonic3: { standard: 30, vip: 50, family: 80 },
    avatar2: { standard: 35, vip: 55, family: 85 },
    fastx: { standard: 25, vip: 45, family: 75 },
    guardians: { standard: 40, vip: 60, family: 90 }
};

// Funkcja do obliczania i aktualizacji ceny
function updatePrice() {
    // Pobieramy wartości z formularza
    const movie = document.getElementById('movie').value;
    const ticketType = document.getElementById('ticketType').value;
    const quantity = document.getElementById('quantity').value;

    // Obliczamy cenę za bilet
    const pricePerTicket = ticketPrices[movie][ticketType];
    const totalPrice = pricePerTicket * quantity;

    // Zaktualizowanie ceny na formularzu
    document.getElementById('ticketPrice').innerText = `${totalPrice} PLN`;
}

// Inicjalizacja siatki miejsc i ceny
window.onload = function () {
    generateSeats();
    updatePrice();  // Pierwsza aktualizacja ceny po załadowaniu strony
};

// Funkcja do generowania siatki miejsc
function generateSeats() {
    const seatingChart = document.getElementById('seatingChart');
    const rows = ['A', 'B', 'C', 'D', 'E']; // Przykładowe rzędy
    const seatsPerRow = 8; // 8 kolumn miejsc

    // Tworzenie przycisków dla każdego miejsca
    rows.forEach(row => {
        for (let i = 1; i <= seatsPerRow; i++) {
            const seatId = `${row}${i}`;
            const seatButton = document.createElement('button');
            seatButton.classList.add('seat', 'available');
            seatButton.setAttribute('type', 'button');
            seatButton.setAttribute('data-seat', seatId);
            seatButton.innerText = seatId;
            seatButton.addEventListener('click', selectSeat);
            seatingChart.appendChild(seatButton);
        }
    });
}

// Funkcja do wybierania miejsca
function selectSeat(event) {
    const seatButton = event.target;
    const selectedSeat = seatButton.getAttribute('data-seat');

    // Sprawdzanie, ile biletów jest wybranych
    const quantity = parseInt(document.getElementById('quantity').value);
    const selectedSeats = document.querySelectorAll('.seat.selected');

    if (selectedSeats.length < quantity) {
        // Dodajemy nowe miejsce do listy
        seatButton.classList.add('selected');
        seatButton.classList.add('reserved'); 
        seatButton.disabled = true; // Wyłączenie możliwości ponownego kliknięcia na to miejsce
    } else if (selectedSeats.length === quantity) {
        // Możemy odznaczyć miejsca, gdy ilość biletów już wybrana
        if (seatButton.classList.contains('selected')) {
            seatButton.classList.remove('selected');
            seatButton.classList.remove('reserved');
            seatButton.disabled = false;  // Przywrócenie możliwości kliknięcia
        }

    }
    
     // Ukryty input do wysyłania wybranych miejsc
     const selectedSeatsArray = Array.from(document.querySelectorAll('.seat.selected'))
     .map(seat => seat.getAttribute('data-seat'));
 document.getElementById('selectedSeat').value = selectedSeatsArray.join(',');

 // Zaktualizowanie ceny
 updatePrice();

 // Wyświetlanie komunikatu o rezerwacji
 if (seatButton.classList.contains('reserved')) {
     alert("Bilet zarezerwowany. Płatność należy dokonać w kasie.");
 }
}

// Funkcja do obliczania ceny
function updatePrice() {
    const movie = document.getElementById('movie').value;
    const ticketType = document.getElementById('ticketType').value;
    const quantity = document.getElementById('quantity').value;

    const pricePerTicket = ticketPrices[movie][ticketType];
    const totalPrice = pricePerTicket * quantity;

    // Aktualizacja ceny na formularzu
    document.getElementById('ticketPrice').innerText = `${totalPrice} PLN`;
}

// Inicjalizacja siatki miejsc i ceny
window.onload = function () {
    generateSeats();
    updatePrice();
};
