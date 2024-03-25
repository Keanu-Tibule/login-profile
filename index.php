<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <div class="container">
            <h1>LOGIN</h1>
            
            <!--checks if there is an error displayed at the URL query AND if the error is = 1-->
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
            <h4>No account yet?</h4>
            <button class="btn-register" onclick="location.href='front-register.php'" type="button">Register</button>
        </div>
    </body>
</html>