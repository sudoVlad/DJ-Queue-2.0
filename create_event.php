<?php 
	//start session
	session_start();

	//connect to database
	require 'connection.php';
	$conn    	= Connect();
	
	//variable set
	$event_name    	= $conn->real_escape_string($_POST['event_name']);
	$event_id   	= $conn->real_escape_string($_POST['event_id']);
	$dj_password    = $conn->real_escape_string($_POST['dj_password']);
	$password	= $conn->real_escape_string($_POST['password']);
	$privacy	= $conn->real_escape_string($_POST['privacy']);
	$creator_IP	= $_SERVER['REMOTE_ADDR'];
	
	//update database
	$sql   		= "INSERT into event (event_name,event_id,dj_password,creator_IP) VALUES('" . $event_name . "','" . $event_id . "','" . $dj_password . "', '" . $creator_IP . "')";
	$success 	= $conn->query($sql);
 
	//error check
	if (!$success){ 
   		echo '<a href="create.html"<button type="button" class="btn-lg btn-primary active"></button>Go Back</a>';
                die("Try Again: ".$conn->error);
	}
 
	//output
	echo "Event ID: $event_id<br>";
	echo "Event Name: $event_name<br>";
	echo "DJ Password: $dj_password<br>";
	echo "Privacy: $privacy";	

	//close connection
	$conn->close(); 
	
	//redirect
	header('Location: home.php');
?>
