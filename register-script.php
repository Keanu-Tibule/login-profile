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

    $check_sql = "SELECT * FROM user_info WHERE username = '$username'";
    $check_result = mysqli_query($conn, $check_sql);

    if(mysqli_num_rows($check_result) > 0) {//if username is already taken
        header("Location: register-page.php?error=1");
        exit;
    }

    $sql = "INSERT INTO user_info (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $sql);

    if(!$result){//if there is an error during sql query
        header("Location: register-page.php?error=2");
        exit;
    }
    else{
        header("Location: index.php");//display success message
        exit;
    }
}
?>