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
        <title>Settings</title>
        <link rel="stylesheet" href="settings.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="../home/home.php"><img src="media/KDLogoBlack.png" alt="Logo"></a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="../home/front-home.php">Home</a></li>
                    <li><a href="../profile/front-profile.php">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="../logout.php" class="logout">Logout</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <h1>Change your settings  <?php echo $_SESSION["username"];?></h1>
        </div>
    </body>
</html>