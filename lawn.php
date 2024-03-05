<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Lawn</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['lawnSize'])) {
        $username = $_SESSION["username"];
        $username = mysqli_real_escape_string($con, $username);
        $lawnSize    = stripslashes($_REQUEST['lawnSize']);
        $lawnSize    = mysqli_real_escape_string($con, $lawnSize);
        $numberObstacle = stripslashes($_REQUEST['numberObstacle']);
        $numberObstacle = mysqli_real_escape_string($con, $numberObstacle);
        $cost    = stripslashes($_REQUEST['cost']);
        $cost    = mysqli_real_escape_string($con, $cost);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `lawn` (username, lawnSize, numberObstacle, cost, create_datetime)
                     VALUES ('$username', '$lawnSize', '$numberObstacle', '$cost', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You have added lawn info sucessfully.</h3><br/>
                  <p class='link'>Click here to <a href='Lawn.php'>Return</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Lawn.php'>try</a> again.</p>
                  </div>";
        }
    } else { 
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Lawn Info</h1>
        <input type="number" class="login-input" name="lawnSize" placeholder="Lawn Size">
        <input type="number" class="login-input" name="numberObstacle" placeholder="Number of Obstacles">
        <input type="number" class="login-input" name="cost" placeholder="Plan Cost">
        <input type="submit" name="submit" value="Submit" class="login-button">
        <p class="link"><a href="Profile.php">Click to return</a></p>
    </form>
<?php
    }
?>
</body>
</html>