<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <div class="form-box">
            <h2>Register</h2>
            <form action="register.php" method="POST">
                <input type="text" name="username" placeholder="Enter your name" required>
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="text" name="phone" placeholder="Valid Phone Number" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit">Register</button>
                <p>Already have an account? <a href="login.html">Login</a></p>
            </form>
        </div>
    </div>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            // Ici, normalement, on stocke ces données dans une base de données
            echo "Compte créé avec succès pour $username !";
        }
    ?>
</body>
</html>