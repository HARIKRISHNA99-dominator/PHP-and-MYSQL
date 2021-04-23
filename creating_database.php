<?php
// Connecting to the Database
$servername = "127.0.0.1";
$username = "hari";
$password = "hari";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection is successful<br>";
}

// Create a db
$sql = "CREATE DATABASE insert_form";

$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db is  successfully created!<br>";
}
else{
    echo "The db creation failed because of this error ---> ". mysqli_error($conn);
}
  
?>