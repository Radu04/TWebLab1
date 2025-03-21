<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="background-container"></div>

    <div class="login-container">
        <h1>Autentificare</h1>
        <form id="login-form">
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" required>
            </div>
            <div class="input-group">
                <label for="password">Parola</label>
                <input type="password" id="password" required>
            </div>
            <button type="submit" class="login-button">Autentifică-te</button>
            <p id="error-message" style="color: red;"></p>
        </form>
        <p>Nu ai cont? <a href="register.php">Înregistrează-te aici</a></p>
    </div>

    <script src="js/login.js"></script>
</body>
</html>
