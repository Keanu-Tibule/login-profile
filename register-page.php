<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <div class="container">
            <h1>REGISTER</h1>
            <?php if (isset($_GET["error"]) && $_GET["error"] == 1): ?> 
                <p style="color: red;">Username already taken</p>
            <?php endif; ?>
            <form method="post" action="register-script.php">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password: </label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="Register">
            </form>
        </div>
    </body>
</html>