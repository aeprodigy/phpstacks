<?php
$SERVERNAME ="localhost";
$USRNAME ="root";
$PASSWORD ="";
$DATABASE = "mydatabase";

$conn = mysqli_connect($SERVERNAME,$USRNAME,$PASSWORD,$DATABASE);
//check the connection.
if($conn){

    echo "Connected automajically";
}else{
    die("This aint working out");
}
//We address the table creation
$sql = "CREATE TABLE content(id int(10) PRIMARY KEY,fname VARCHAR(20),lname VARCHAR(20))";

if($conn->query($sql)===TRUE){
    echo "yello Nigga";
}else{
    die("The connection is fecaed");
}
$conn->close();


?>