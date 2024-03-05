<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<link href="style.css" rel="stylesheet">
	</head>
<body>
	
  <div class="container dashboard-container">

    <h1>Dashboard</h1>
    
    <div class="row">
        <div class="col-md-2">
            <div class="notification-tab">
                <a href="profile.php" class="btn btn-info">Profile</a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="notification-tab">
                <a href="notification.php" class="btn btn-info">Notification</a>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="row">
        <div class="col-md-4">
          <a href="insurance_Providers.php" class="card btn btn-primary">
            <div class="card-body">
              <h5 class="card-title">Mortgages and insurances</h5>
              <p class="card-text">Click here to perform action.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="Lawn_Providers.php" class="card btn btn-primary">
            <div class="card-body">
              <h5 class="card-title">Lawn care</h5>
              <p class="card-text">Click here to perform action.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="Interior_Providers.php" class="card btn btn-primary">
            <div class="card-body">
              <h5 class="card-title">Interior care</h5>
              <p class="card-text">Click here to perform action.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="Internet_Providers.php" class="card btn btn-primary">
            <div class="card-body">
              <h5 class="card-title">Internet sevices</h5>
              <p class="card-text">Click here to perform action.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="Phone_Providers.php" class="card btn btn-primary">
            <div class="card-body">
              <h5 class="card-title">Phone Services</h5>
              <p class="card-text">Click here to perform action.</p>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="index.php" class="card btn btn-primary">
            <div class="card-body">
              <h5 class="card-title">Logout</h5>
            </div>
          </a>
    </div>
  </div>

</div>

</body>
</html>