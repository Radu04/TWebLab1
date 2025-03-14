document.addEventListener("DOMContentLoaded", function () {
    setTimeout(() => {
        document.querySelector(".background-container").style.filter = "blur(0px)";
    }, 100);
});

document.getElementById("register-form").addEventListener("submit", function (event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirm-password").value;
    const errorMessage = document.getElementById("error-message");

    if (password !== confirmPassword) {
        errorMessage.textContent = "Parolele nu coincid!";
        return;
    }

    // Salvăm utilizatorul în localStorage
    const users = JSON.parse(localStorage.getItem("users")) || [];
    if (users.some(user => user.email === email)) {
        errorMessage.textContent = "Acest email este deja folosit!";
        return;
    }

    users.push({ username, email, password });
    localStorage.setItem("users", JSON.stringify(users));

    alert("Înregistrare reușită! Acum te poți autentifica.");
    window.location.href = "login.html";
});
