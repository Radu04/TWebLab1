<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>

    <div class="background-container"></div>

    <div class="register-container">
        <h1>Înregistrare</h1>
        <form id="register-form">
            <div class="input-group">
                <label for="username">Nume utilizator</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Parolă</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="input-group">
                <label for="confirm-password">Confirmă parola</label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>

            <button type="submit" class="register-button">Înregistrează-te</button>
            <p id="error-message" class="error-message"></p>
        </form>

        <p>Ai deja un cont? <a href="login.php">Autentifică-te</a></p>
    </div>

    <script src="js/register.js"></script>

</body>
</html>
