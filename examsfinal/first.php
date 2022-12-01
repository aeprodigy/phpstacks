<?php
$SERVERNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASENAME = 'exams';

$conn = mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASENAME);

if($conn){
    echo "connected";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First page</title>
</head>
<body>
    
</body>
</html>