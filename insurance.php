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
    if (isset($_REQUEST['amountCovered'])) {
        $username = $_SESSION["username"];
        $username = mysqli_real_escape_string($con, $username);
        $amountCovered    = stripslashes($_REQUEST['amountCovered']);
        $amountCovered    = mysqli_real_escape_string($con, $amountCovered);
        $accountID = stripslashes($_REQUEST['accountID']);
        $accountID = mysqli_real_escape_string($con, $accountID);
        $cost    = stripslashes($_REQUEST['cost']);
        $cost    = mysqli_real_escape_string($con, $cost);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `insurance` (username, amountCovered, accountID, cost, create_datetime)
                     VALUES ('$username', '$amountCovered', '$accountID', '$cost', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You have added internet info sucessfully.</h3><br/>
                  <p class='link'>Click here to <a href='insurance.php'>Return</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='insurance.php'>try</a> again.</p>
                  </div>";
        }
    } else { 
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Insurance Info</h1>
        <input type="number" class="login-input" name="amountCovered" placeholder="Amount Covered by Insurance">
        <input type="number" class="login-input" name="accountID" placeholder="accountID">
        <input type="number" class="login-input" name="cost" placeholder="Plan Cost">
        <input type="submit" name="submit" value="Submit" class="login-button">
        <p class="link"><a href="dashboard.php">Click to return to dashboard</a></p>
    </form>
<?php
    }
?>
</body>
</html>