document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        document.querySelector(".background-container").style.filter = "blur(0px)";
    }, 100);
});

document.getElementById("login-form").addEventListener("submit", function (event) {
    event.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const errorMessage = document.getElementById("error-message");

    const users = JSON.parse(localStorage.getItem("users")) || [];
    const user = users.find(user => user.email === email && user.password === password);

    if (!user) {
        errorMessage.textContent = "Cont inexistent sau date greșite!";
        return;
    }

    alert(`Bine ai venit, ${user.username}!`);
    window.location.href = "3page.php"; 
});
