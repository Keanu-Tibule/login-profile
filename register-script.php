<?php
session_start();

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'login_page_db';

$conn = mysqli_connect($host, $username, $password, $database);
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user_info (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){//change this to if returned username taken
        header("Location: register-page.php?error=1");//make error message in page
        exit;
    }
    else{
        header("Location: index.php");//display success message
        exit;
    }
}
?>