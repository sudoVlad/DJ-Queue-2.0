<?php 
	//start session
	session_start();
	
	//connect to database
	require 'connection.php';
	$conn    	= Connect();

	//input
	$song_id = $conn->real_escape_string($_POST['song_id']);
	
	//delete
        $sql	        = "DELETE FROM `playlist` WHERE song_id = '" . $song_id . "'"; 
        $success        = $conn->query($sql);

	//database check
	if (!$success) { die("Couldn't enter data: ".$conn->error);}

	//close the database
	$conn->close(); 

	//return
	header("Location:  {$_SERVER['HTTP_REFERER']}");
?>
