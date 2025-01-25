// recruitment_form.js

document.getElementById('recruitmentForm').addEventListener('submit', function (event) {
    event.preventDefault();

    
    const popup = document.getElementById('popup');
    popup.style.display = 'block';

    
    setTimeout(() => {
        popup.style.display = 'none';
        this.submit();
    }, 3000);
});
