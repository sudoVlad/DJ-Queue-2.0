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
      <a class="navbar-brand" href="index.hmtl">DJ Queue 2.0</a>
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
    <h1>Song Added</h1>

 <?php
	//connect to database
	require 'connection.php';
	$conn    	= Connect();

	//variable set
	$song_name    	= $conn->real_escape_string($_POST['song_name']);
	$artist   	= $conn->real_escape_string($_POST['artist']);
	$query   	= "INSERT into playlist (song_name,artist) VALUES('" . $song_name . "','" . $artist . "')";
	$success 	= $conn->query($query);
	 
	//database check
	if (!$success) { die("Couldn't enter data: ".$conn->error);}

	//output 
	echo "Song Name: $song_name<br>";
	echo "Artist: $artist<br>";

	//close the database
	$conn->close(); 

	//return to user mode
	header( 'Location: user.php' );
?>
</div>

</body>
</html>
