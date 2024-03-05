<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Internet</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['internetSpeed'])) {
        $username = $_SESSION["username"];
        $username = mysqli_real_escape_string($con, $username);
        $internetSpeed    = stripslashes($_REQUEST['internetSpeed']);
        $internetSpeed    = mysqli_real_escape_string($con, $internetSpeed);
        $accountID = stripslashes($_REQUEST['accountID']);
        $accountID = mysqli_real_escape_string($con, $accountID);
        $cost    = stripslashes($_REQUEST['cost']);
        $cost    = mysqli_real_escape_string($con, $cost);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `internet` (username, internetSpeed, accountID, cost, create_datetime)
                     VALUES ('$username', '$internetSpeed', '$accountID', '$cost', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You have added internet info sucessfully.</h3><br/>
                  <p class='link'>Click here to <a href='Internet.php'>Return</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='Internet.php'>try</a> again.</p>
                  </div>";
        }
    } else { 
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Internet Info</h1>
        <input type="number" class="login-input" name="internetSpeed" placeholder="Internet Speed in MPS">
        <input type="number" class="login-input" name="accountID" placeholder="accountID">
        <input type="number" class="login-input" name="cost" placeholder="Plan Cost">
        <input type="submit" name="submit" value="Submit" class="login-button">
        <p class="link"><a href="Profile.php">Click to return</a></p>
    </form>
<?php
    }
?>
</body>
</html>