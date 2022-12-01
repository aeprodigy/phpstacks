<?php
    $SERVERNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASE = 'blood';
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        //Establish the connection to the server and the database.
        $conn = mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);
        echo "damn.";

        if($conn){
            echo "connected successfully";
        }
        else{
            die("Not connected".$conn);
        }

    }



?>
