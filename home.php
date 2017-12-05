<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> <?php echo "Event Name: " .  $_SESSION["EVENT_NAME"]; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Home Portal</a> 
   </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">Home</a></li>
        <li><a href="user.php">User Mode</a></li>
        <li><a href="dj.php">DJ Mode</a></li>
        <li><a href="contact.html">Contact</a></li>
      	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
  <div class="container row" style="text-align:center">
  <h1>Home Portal</h1>
  <div class="container row" style="text-align:center">
  <?php
		echo '
		<div>
                        <a href="user.php"<button type="button" class="btn-lg btn-primary active"></button>User Mode</a>
                        <a href="dj.php"<button type="button" class="btn-lg btn-primary active"></button>DJ Mode</a>
                </div><br>';
		
		//output
                echo "Event Name: " . $_SESSION["EVENT_NAME"];
                echo "<br>";
                echo "Event ID: " . $_SESSION["EVENT_ID"];


  ?>	
 </div>
  
 </body>
</html>
