<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood donation</title>
</head>

<body>
    <h1>This is a Blood donation demo</h1>
    <form action="connection.php" method="post">
        <label for="firstname">First Name</label>
        <br>
        <input type="text" name="firstname">
        <br>
        <label for="lastname">Last Name</label>
        <br>
        <input type="text" name="Lastname">
        <br>
        <label for="blood">Blood Type</label>
        <br>
        <input type="text" name="blood">
        <br>
        <label for="phone">Phone Number</label>
        <br>
        <input type="text" name="phone">
        <br>
        <label for="email">Email</label>
        <br>
        <input type="text" name="email">
        <br>
        <br>
        <input type="button" name="submit" value="Submit Details">
    </form>
</body>

</html>