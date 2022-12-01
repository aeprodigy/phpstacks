<?php
$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "mydatabase";

//connection to the server and the database.
$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DATABASE);

if ($conn) {
    echo "This is connected we move on";
} else {
    die("Connection failed");
}
echo "<br>";


if ($_POST['fname'] < 0) {
    echo "empty";
} else {
    $fname = $_POST['fname'];
   // $lname = $_POST['lname'];
    echo $_POST['fname'];
}
//we Insert data into the table
/*
$sql = "INSERT INTO content(fname) VALUES('$fname')";

if ($conn->query($sql) === TRUE) {
    echo " The code is on man";
} else {
    die("INvalid query");
}

*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Grabber</title>
</head>

<body>
    <form action="detailsGrabber.php" method="post">
        <input type="text" name="fname">
        <br>
        <input type="text" name="">
        <br>
        <input type="submit">

    </form>
    <h1><?php echo $fname; ?></h1>

</body>

</html>