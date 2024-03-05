<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Phones</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['phoneNumber'])) {
        $username = $_SESSION["username"];
        $username = mysqli_real_escape_string($con, $username);
        $phoneNumber    = stripslashes($_REQUEST['phoneNumber']);
        $phoneNumber    = mysqli_real_escape_string($con, $phoneNumber);
        $planID = stripslashes($_REQUEST['planID']);
        $planID = mysqli_real_escape_string($con, $planID);
        $cost    = stripslashes($_REQUEST['cost']);
        $cost    = mysqli_real_escape_string($con, $cost);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `phones` (username, phoneNumber, planID, cost, create_datetime)
                     VALUES ('$username', '$phoneNumber', '$planID', '$cost', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You have added phone info sucessfully.</h3><br/>
                  <p class='link'>Click here to <a href='Phone.php'>Return</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Phone.php'>try</a> again.</p>
                  </div>";
        }
    } else { 
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Add Phone</h1>
        <input type="text" class="login-input" name="phoneNumber" placeholder="Phone Number">
        <input type="text" class="login-input" name="planID" placeholder="PlanID">
        <input type="number" class="login-input" name="cost" placeholder="Plan Cost">
        <input type="submit" name="submit" value="Submit" class="login-button">
        <p class="link"><a href="Profile.php">Click to return</a></p>
    </form>
<?php
    }
?>
</body>
</html>