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
if (!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

$username = $_SESSION['username'];
$sql = "SELECT * FROM user_info WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result); //get data from row associated with the result
    $_SESSION['email'] = $row['email'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['mname'] = $row['mname'];
    $_SESSION['lname'] = $row['lname'];
    $_SESSION['gender'] = $row['gender'];
    $_SESSION['birthdate'] = $row['birthdate'];
} 
else{
    echo "User not found.";
}
?>