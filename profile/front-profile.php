<?php
include 'back-profile.php';

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
        <title>Profile</title>
        <link rel="stylesheet" href="profile.css">
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="../home/home.php"><img src="media/KDLogoBlack.png" alt="Logo"></a>
            </div>
            <nav>
                <ul class="menu">
                    <li><a href="../home/front-home.php">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="../settings/front-settings.php">Settings</a></li>
                    <li><a href="../logout.php" class="logout">Logout</a></li>
                </ul>
            </nav>
        </header>
        <div class="content">
            <div class="container">
                <h1>User Profile</h1>
                <p><strong>Username:</strong> <?php echo $_SESSION['username']; ?></p>
                <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
                <p><strong>Full Name:</strong> <?php echo $_SESSION['fname'] . ' ' . $_SESSION['mname'] . ' ' . $_SESSION['lname']; ?></p>
                <p><strong>Gender:</strong> <?php echo $_SESSION['gender']; ?></p>
                <p><strong>Birthdate:</strong> <?php echo $_SESSION['birthdate']; ?></p>
            </div>  
        </div>
    </body>
</html>