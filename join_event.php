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
      <a class="navbar-brand" href="home.php">DJ Queue 2.0</a>
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
 
   <div id="main" class="container row" style="text-align:center">
<?php
	//connect to database
	require 'connection.php';
        $conn 		= Connect();
        if($conn->connect_error){ die("Connection Failed: " . $conn->connect_error);}

	//input
	$event_id       = $conn->real_escape_string($_POST['event_id']);
	$password       = $conn->real_escape_string($_POST['password']);
	$dj_password	= $conn->real_escape_string($_POST['dj_password']);

	//database data pull
        $sql = "SELECT event_name,event_id,password,dj_password FROM event WHERE event_id= '" . $event_id . "'";
        $result = $conn->query($sql);
	$row = $result->fetch_assoc();

	//authentication check
	if( ($row["password"] === $password) ){
		
		//set session variables
		$_SESSION["EVENT_ID"] 	= $row["event_id"];
		$_SESSION["EVENT_NAME"] = $row["event_name"];
	 	
		//setting DJ mode
		$_SESSION["DJ_MODE"] = "off";
		if($dj_password == $row['dj_password']){
			$_SESSION["DJ_MODE"] = "on";
		}

 	      	//diconnect to database
        	$conn->close();

		//redirection
		header( 'Location: home.php' );	
	}
	else{
        	//diconnect to database
        	$conn->close();
	
		//redirection
		header( 'Location: join.html' );
	}
?>
  </div>
  <script>
	function yesnoCheck() {
    	if (document.getElementById('yesCheck').checked) {document.getElementById('ifYes').style.display = 'block';}
    	else {document.getElementById('ifYes').style.display = 'none';}}
  </script>
</body>
</html>
