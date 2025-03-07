document.addEventListener("DOMContentLoaded", function () {
    console.log("Pagina este complet încărcată!");

    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('click', () => {
            card.style.backgroundColor = '#f0f0f0';
        });
    });
});
