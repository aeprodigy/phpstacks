<?php
$SERVERNAME ='localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE= 'exams';

$conn = mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn){
    echo "connected";
}else{
    die("hello");
}
$sql = "INSERT INTO courses(courseid, coursename, numberofstuds) VALUES (1, 'prodiget','twentyFive')";

if($conn->query($sql)===TRUE){
    echo "data has been inserted";
}else{
    die("not valid connection");
}

$SQLite = "SELECT * FROM courses";
$results = mysqli_query($conn,$SQLite);
$resultsCheck = mysqli_num_rows($results);

if($resultsCheck >0){
    while($row = mysqli_fetch_assoc($results)){
        echo $row['coursename']."<br>";
    }
}


?>