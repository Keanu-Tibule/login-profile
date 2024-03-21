<!DOCTYPE html>
<html>
    <head>
        <title>KD Login</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <div class="container">
            <h1>LOGIN</h1>
            <?php if (isset($_GET["error"]) && $_GET["error"] == 1): ?>
                <p style="color: red;">Invalid username or password.</p>
            <?php endif; ?>
            <form method="post" action="login.php">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password: </label>
                <input type="password" id="password" name="password" required>

                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>