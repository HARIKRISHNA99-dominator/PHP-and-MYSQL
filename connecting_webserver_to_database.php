<?php

// echo "connect to the database <br>";
/*
die() 
Ways to connect to a MySQL Database
1. MySQLi extension
2. PDO
*/
// Connecting to the Database

$servername = "127.0.0.1";
$username = "hari";
$password = "hari";
$database = "mytest_db";



// Create a connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection to the datbase mytest_db server in 127.0.0.1 successful";
}

?>