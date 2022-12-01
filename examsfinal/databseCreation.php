<?php 
$SERVERNAME = 'localhost'; 
$USERNAME = 'root';
$PASSWORD = '';

//connection
$conn  = mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD);

if($conn){
    echo "connected successfully";

}else{
    die("Disconnected");
}
//database creation
$sql = "CREATE DATABASE exams";

//test creation
if($conn->query($sql)===TRUE){
    echo "Database Created!";
}else{
    echo "Erro couldnt connect".$conn->error;
}


$conn->close();

?>