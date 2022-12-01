<?php
include('first.php');
$SERVERNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASENAME = 'exams';

$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DATABASENAME);

$sql = "CREATE TABLE courses(courseid int(6), coursename VARCHAR(20),numberofstuds VARCHAR(20))";


if ($conn->query($sql) === TRUE) {
    echo "courses created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>