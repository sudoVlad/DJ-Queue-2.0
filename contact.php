<?php session_start(); ?>
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
	<li><a href="home.php">Home</a></li>
	<?php
                if(isset($_SESSION['EVENT_ID'])){
        		echo '<li><a href="user.php">User Mode</a></li>';
        		if( $_SESSION['DJ_MODE'] == "on" ){
				echo '<li><a href="dj.php">DJ Mode</a></li>';
			}
		}else{
			echo '<li><a href="create.php">Create Event</a></li>';
		        echo '<li><a href="join.php">Join Event</a></li>';
		}
	?>
        <li class="active"><a href="contact.html">Contact</a></li>
	<?php
                if(isset($_SESSION['EVENT_ID']))
                        echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
        ?>
      </ul>
    </div>
  </div>
</nav>
  
<body>
	<div class="container" style="text-align:center">
  		<h3>Contact Information</h3><br> 
	Name: Vladimir Beauge<br>
	Email: <a href="mailto:vladBeauge@gmail.com">vladBeauge@gmail.com</a><br>
	Personal Website: <a href="https://vladimirbeauge.github.io">Personal Website</a><br>
	LinkedIn: <a href="https://www.linkedin.com/in/vladimirbeauge/">LinkedIn</a><br>
	Github: <a href="https://github.com/VladimirBeauge">GitHub</a><br>
<footer>
</footer>
</body>
</html>
