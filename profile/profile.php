<?php
session_start();

if(!isset($_SESSION["username"])){ //checks if the user is logged. isset checks empty variables
    header("Location: login.php"); //takes user back to login page
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="profile.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="../home/home.php"><img src="media/KDLogoBlack.png" alt="Logo"></a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="../home/home.php">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="../settings/settings.php">Settings</a></li>
                    <li><a href="../logout.php" class="logout">Logout</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <h1>Username: <?php echo $_SESSION["username"];?></h1>
        </div>
    </body>
</html>