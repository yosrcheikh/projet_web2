<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="text" name="username" placeholder="Enter your name" required>
                <input type="password" name="password" placeholder="Enter Password" required>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </form>
        </div>
    </div>

    <?php
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Simulation d'une base de données
            $users = [
                ["username" => "test", "password" => "1234"],
                ["username" => "admin", "password" => "admin"]
            ];

            foreach ($users as $user) {
                if ($user['username'] == $username && $user['password'] == $password) {
                    $_SESSION['username'] = $username;
                    header("Location: dashboard.php");
                    exit();
                }
            }

            echo "Identifiants incorrects.";
        }
    ?>

</body>
</html>