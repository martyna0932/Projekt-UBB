function setActive(button) {
    // Usunięcie aktywności z innych przycisków
    const buttons = document.querySelectorAll('.btn-link');
    buttons.forEach(btn => btn.classList.remove('active'));

    // Dodanie klasy 'active' do klikniętego przycisku
    button.classList.add('active');
}
