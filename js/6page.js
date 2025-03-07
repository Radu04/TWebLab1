document.addEventListener("DOMContentLoaded", function() {
    console.log("Pagina RS & S-Series a fost încărcată cu succes!");

    const backButton = document.querySelector('.button');
    
    if (backButton) {
        backButton.addEventListener('click', function() {
            alert("Înapoi la pagina anterioară!");
        });
    }
});
