<?php 
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD ='';

    //connection to the database 
    $conn = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD);

    if($conn){
        echo "We made it...";
    }else{
        die(mysqli_error($conn));
    }



?>