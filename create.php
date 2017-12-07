<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DJ Queue 2.0</title>
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
        <li class="active"><a href="create.php">Create Event</a></li>
        <li><a href="join.php">Join Event</a></li>
        <li><a href="contact.php">Contact</a></li>
	<?php
		if(isset($_SESSION['EVENT_ID']))
        		echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
	?>
     </ul>
    </div>
  </div>
</nav>
  <div class="container" style="text-align:center">
    <h1>Create Event</h1>
  
	  <form action="create_event.php" method="post">
	      Event ID <input type="number" name="event_id" placeholder="Event ID" required> <p id="rand_num"></p>
			<script> 
				//output	
				document.getElementById("rand_num").innerHTML = "Suggested Event ID: " + Math.floor( Math.random() * 100000);
			</script>
	      Event Name <input type="text" name="event_name" placeholder="Event Name" required><br>
	      DJ Password <input type="password" name="dj_password" placeholder="Password" required><br>
	      Public <input type="radio" onclick="javascript:yesnoCheck();" name="privacy" checked>
	      Private <input type="radio" onclick="javascript:yesnoCheck();" name="privacy" id="yesCheck"><br> 
	      <div id="ifYes" style="display:none">
				<div id="ifYes" class="alert alert-success">
					<p>Your password is null. Change below</p>
				</div>
	     		Password <input type="password" name="password" placeholder="Password" value="null" id="yes">
	      </div>
		
		   <div class="form-group">
         </div>

			<div class="alert alert-info">
				<strong>Info!</strong>Duplicate Event IDs will not be accepted.
			</div>

			<div class="form-group">
					<button type="submit" class="btn btn-default">Create Event</button>
			</div>
	</form>
  </div>

<script>
 function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {document.getElementById('ifYes').style.display = 'block';}
    else document.getElementById('ifYes').style.display = 'none';}
  </script>

<footer>
</footer>
</body>
</html>
