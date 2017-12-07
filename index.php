<?php  session_start(); //start session ?>
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
      <a class="navbar-brand" href="index.php">DJ Queue 2.0</a> 
   </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Home</a></li>
	<li><a href="create.php">Create Event</a></li>
	<li><a href="join.php">Join Event</a></li>
        <li><a href="contact.php">Contact</a></li>
	<?php
		//only show logout option if logged into session
                if(isset($_SESSION['EVENT_ID'])){
			echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
		}
	 ?>
      </ul>
    </div>
  </div>
</nav>
  
  <div class="container" style="text-align:center">
  <h1>DJ Queue 2.0</h1>
  <div class="container" style="text-align:center">
	<?php
		//only show home portal if logged into session
          	if(isset($_SESSION['EVENT_ID'])){
			echo '<a href="home.php"<button type="button" class="btn-lg btn-primary"></button>Home Portal</a><br><br><br>';
		}
        ?>
	<a href="create.php"<button type="button" class="btn-lg btn-primary"></button>Create Event</a><br>
        <br><br><a href="join.php"<button type="button" class="btn-lg btn-primary"></button>Join Event</a>
  </div>
 <footer>
</footer>  
 </body>
</html>
