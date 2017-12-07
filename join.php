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
        <li><a href="index.php">Home</a></li>
        <li><a href="create.php">Create Event</a></li>
        <li class="active"><a href="join.php">Join Event</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php
                if(isset($_SESSION['EVENT_ID']))
                        echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
        ?>
      </ul>
    </div>
  </div>
</nav>
  <div id="main" class="container" style="text-align:center">
    <h1>Join Event</h1>

    <form action="join_event.php" method="post">
	Event ID<input name="event_id" type="number" maxlength="5" minlength="5" value="" required><br>
      	Password<input name="password" type="password" value="null" required><br>
	DJ Password<input name="dj_password" type="password" value="null"><br>
	<div class="alert alert-info"><p>Password is null for public events</p></div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Join Event</button>
     		</div>
	</div>
   </form>
  </div>
  <script>
 function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';}
    else document.getElementById('ifYes').style.display = 'none';}
  </script>
</body>
</html>
