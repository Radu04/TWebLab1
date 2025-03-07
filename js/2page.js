document.querySelector('.back-button').addEventListener('click', function(e) {
    const confirmExit = confirm("Vrei să te întorci la pagina principală?");
    if (!confirmExit) {
        e.preventDefault(); 
    }
});
