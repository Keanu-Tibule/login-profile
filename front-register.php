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
                <p style="color: red;">Username Alreaedy Taken</p>
            <?php endif; ?>
            <?php if (isset($_GET["error"]) && $_GET["error"] == 2): ?> 
                <p style="color: red;">Connection Error</p>
            <?php endif; ?>
            <form method="post" action="back-register.php">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password: </label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="Register">
            </form>
            <button class="btn-back-login" onclick="location.href='index.php'" type="button">Back to Login</button>
        </div>
    </body>
</html>