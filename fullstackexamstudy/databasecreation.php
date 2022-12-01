<?php
//include("connection.php");
$SERVERNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';


//we  Create the connection 
$conn = new mysqli($SERVERNAME, $USERNAME, $PASSWORD);

//Lets check the connection of the above statement.
if ($conn) {
    echo "connected successfully";
} else {
    die($conn->connection_error);
}
    
//we create the database in this file



?>