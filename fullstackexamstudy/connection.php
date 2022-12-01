<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The database connection</title>
</head>
<body>
    <?php
     $servername = "localhost";
     $username ="root";
     $password ="";

     //we  Create the connection 
     $conn = new mysqli($servername,$username,$password);

     //Lets check the connection of the above statement.
     if($conn)
     {
        echo "connected successfully";
     }else{
        die($conn->connection_error);
     }
    
     //We close the Connection on the statement below.
     $conn->close();//connection closed.
    
    ?>
</body>
</html>