<?php
//NOTE: Apologies for the amount of comments, I'm currently learning PHP

session_start(); //To hold session variables or temp variables

$host = 'localhost'; //Declare your sql credentials and settings
$username = 'root';
$password = '';
$database = 'login_page_db';

$conn = mysqli_connect($host, $username, $password, $database); //Make a mysqli_connect function with settings above as parameters

if(!$conn){ //If connection isn't found, exit and throw a message with the error
    die("Connection Failed: " . mysqli_connect_error());
}

//Use request method to find out if the method POST in the form of the HTML has been submitteed
if($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $username = $_POST["username"]; //Retrieve the data from the form
    $password = $_POST["password"];

    //Write a query to check if the data from the form matches any data from the database
    $sql = "SELECT * FROM user_info WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql); //Run the query function with the connection details and query as parameters

    if(mysqli_num_rows($result) == 1){ //If there is a match of a row in the result,
        $_SESSION["username"] = $username; //Start session to store the username data for later uses
        header("Location: home.php"); //Redirects to homepage
        exit; //Exits current page
    }
    else{
        header("Location: index.php?error=1");
        exit;
    }
}
?>