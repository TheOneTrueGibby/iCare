<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $fname    = stripslashes($_REQUEST['fname']);
        $fname    = mysqli_real_escape_string($con, $fname);
        $lname    = stripslashes($_REQUEST['lname']);
        $lname    = mysqli_real_escape_string($con, $lname);
        $age    = stripslashes($_REQUEST['age']);
        $age    = mysqli_real_escape_string($con, $age);
        $income    = stripslashes($_REQUEST['income']);
        $income    = mysqli_real_escape_string($con, $income);
        $hasphone    = stripslashes($_REQUEST['hasphone']);
        $hasphone    = mysqli_real_escape_string($con, $hasphone);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `residents` (username, password, email, fname, lname, age, income, hasphone, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$fname', '$lname', '$age', '$income', '$hasphone', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You have registered a new user successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='dashboard.php'>register</a> again.</p>
                  </div>";
        }
    } else { 
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="text" class="login-input" name="fname" placeholder="First Name">
        <input type="text" class="login-input" name="lname" placeholder="Last Name">
        <input type="number" class="login-input" name="age" placeholder="Your Age">
        <input type="number" class="login-input" name="income" placeholder="Average Income">
        <input type="checkbox" class="login-input" name="hasphone" placeholder="Do You Have A Phone?">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="index.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>