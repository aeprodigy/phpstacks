<?php
    $SERVERNAME ="localhost";
    $USERNAME = "root";
    $PASSWORD = "";

    $conn = mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD);
/* this part deals with the calling and making of methods in php
echo "this program is the final php program for exam studying";
echo "<br>";
function main(){
    print("This is the main function");
    echo "<br>";
    theCalledMethod();
}

function theCalledMethod(){
    echo "This is the called function";
}
main();
*/

//we design a a database from this...we create a database and connnect it.

 $sql = "CREATE DATABASE mydatabase";

 if($conn->query($sql)){
    echo "Lets go, Database created";
 }else{
    die("Closed, database not created");
 }
?>