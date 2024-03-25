<?php
session_start();

if (!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'login_page_db';

$conn = mysqli_connect($host, $username, $password, $database);
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['update'])){ //checks if submit button was clicked and submitted
        $email = $_POST['email']; //fetches the data from the form
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];

        $username = $_SESSION['username'];
        //the ? placeholders will be replaced by binding parameters
        $sqlUpdate = "UPDATE user_info SET email = ?, fname = ?, mname = ?, lname = ?, gender = ?, birthdate = ? WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sqlUpdate); //prepare the connection and the query

        //replace the placeholders with the value of the variables by binding the parameters to it
        // the sssssss represents the 7 strings that will be passed
        mysqli_stmt_bind_param($stmt, "sssssss", $email, $fname, $mname, $lname, $gender, $birthdate, $username);
        mysqli_stmt_execute($stmt);

        $_SESSION['email'] = $email; //updates the session data with the new values
        $_SESSION['fname'] = $fname;
        $_SESSION['mname'] = $mname;
        $_SESSION['lname'] = $lname;
        $_SESSION['gender'] = $gender;
        $_SESSION['birthdate'] = $birthdate;

        header("Location: front-settings.php?success=update");
        exit;
    }

    if(isset($_POST['delete'])){
        $username = $_SESSION['username'];
        $sqlDelete = "DELETE FROM user_info WHERE username = '$username'";
        mysqli_query($conn, $sqlDelete);

        header("Location: ../logout.php?");
        exit;
    }
    mysqli_close($conn);
}
?>