<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

/* Attempt MySQL server connection. Assuming you are running MySQL e server with default setting (user 'root' with no password) */ 
$link = mysqli_connect("localhost", "root", "", "researchflow_db");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM login_info WHERE username_='$username' AND password_='$password'";
$result = mysqli_query($link, $sql);

// Check if the query returned any rows
if(mysqli_num_rows($result) == 1) {
    // Login successful
    $_SESSION['username'] = $username;
    header("location: dashboard.php");
    exit();
} else {
    // Login failed
    echo "Invalid username or password.";
}

// Close connection
mysqli_close($link);

?>