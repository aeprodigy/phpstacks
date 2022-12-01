<?php
static $x = 90;
define("cars", ["benz", "volvo", "BMW"]);
echo cars[2];
$_GET['fname'];
$_GET['lname'];
$_GET['email'];
//variable initialization here
$first_name = $_GET['fname'];
$last_name = $_GET['lname'];
$email = $_GET['email'];
//display of the input values.below in the HTML code.


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Php Exam study" ?></title>
</head>

<body>
    <h1><?php echo $x = 80; ?>hello</h1>
    <h3>The String word count for "Dear World!"</h3>
    <h4><?php
        echo str_word_count("Dear world!");
        ?></h4>
    <h5><?php echo strrev("'Dear World'"); ?></h5>
    <h5>We test the While loop in PHP</h5>
    <?php
    $y = 0;
    while ($y < 3) {
    ?>
        <button><?php echo cars[$y] ?></button>
    <?php
        $y++;
    }
    ?>

    <form action="index.php" method="GET">
        <input type="text" name="fname">
        <br>
        <input type="text" name="lname">
        <br>
        <input type="text" name="email">
        <br>
        <input type="submit" value="Send">
    </form>
    <h1>-----------------------------------------------</h1>
    <p><?php echo $first_name; ?></p>
    <p><?php echo $last_name; ?></p>
    <p><?php echo $email; ?></p>
</body>
<h1>
    <?php
    $cookie_value = "john freaking Doe";
    $cookie_name = "mambwe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    //echo $_COOKIE[$cookie_name];
    //lets delete the cookie below.
    setcookie("mambwe", "", time() - 3600);

    if (count($_COOKIE) > 0) {
        echo "cookie is enabled!!!";
    } else {
        echo "Cookie is disabbled.";
    }

    ?>
</h1>
<?php
//in this part of the program we set the sessions
    $_SESSION['favColor'] ="black";
    $_SESSION['favCar'] ="LandRover_Discovery";
    

    echo "The Favorite color is ".$_SESSION['favColor']." And the favorite Car is a ". $_SESSION['favCar'];
?>
<h2>
    <?php
        print_r($_SESSION);
    ?>
</h2>
</html>