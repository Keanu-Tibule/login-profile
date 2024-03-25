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
                <a href="../home/front-home.php"><img src="media/KDLogoBlack.png" alt="Logo"></a>
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
            <h1>Settings</h1>
            <?php
            if (isset($_GET["success"]) && $_GET["success"] == "update") {
                echo '<p class="success">Profile updated successfully!</p>';
            }
            ?>
            <form action="back-settings.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">

                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname" value="<?php echo $_SESSION['fname']; ?>">

                <label for="mname">Middle Name:</label>
                <input type="text" id="mname" name="mname" value="<?php echo $_SESSION['mname']; ?>">

                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" value="<?php echo $_SESSION['lname']; ?>">

                <label>Gender:</label>
                <input type="radio" id="male" name="gender" value="male" <?php if ($_SESSION['gender'] == 'male') echo 'checked'; ?>>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" <?php if ($_SESSION['gender'] == 'female') echo 'checked'; ?>>
                <label for="female">Female</label>

                <label for="birthdate">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate" value="<?php echo $_SESSION['birthdate']; ?>">

                <button type="submit" name="update">Update</button>
                <button type="submit" name="delete">Delete Account</button>
            </form>
        </div>
    </body>
</html>