<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DJ Queue 2.0</title>
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
      <a class="navbar-brand" href="index.php">DJ Queue 2.0 <?php echo " Event ID: " . $_SESSION["EVENT_ID"];  ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="create.html">Create Event</a></li>
        <li><a href="join.html">Join Event</a></li>
        <li><a href="contact.html">Contact</a></li>
      	<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  
  <div class="container row" style="text-align:center">
<h1>DJ Queue 2.0</h1>
  <div class="container row" style="text-align:center">
  <a href="create.html"<button type="button" class="btn-lg btn-primary active"></button>Create Event</a>
  <a href="join.html"<button type="button" class="btn-lg btn-primary active"></button>Join Event</a>
  <h3>
  <?php
	// Echo session variables that were set on previous page
	echo "Event: " . $_SESSION["EVENT_NAME"] . "<br>";
	
   ?>

 </h3>
</div>
  
</body>
<script src="https://www.gstatic.com/firebasejs/4.7.0/firebase.js"></script>
</html>
