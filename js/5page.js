document.addEventListener("DOMContentLoaded", function() {
    console.log("Pagina Q-Series a fost încărcată cu succes!");

    const backButton = document.querySelector('.button');
    
    if (backButton) {
        backButton.addEventListener('click', function() {
            document.body.style.backgroundColor = '#333'; 
        });
    }
});
