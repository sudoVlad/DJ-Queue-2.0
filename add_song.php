<?php 
	//start session	
	session_start();
	
	//connect to database
	require 'connection.php';
	$conn    	= Connect();

	//variable set
	$song_name    	= $conn->real_escape_string($_POST['song_name']);
	$_SESSION["SONG_NAME"] = $song_name;
	$artist   	= $conn->real_escape_string($_POST['artist']);
	$event_id	= $_SESSION["EVENT_ID"];
	$song_id	= rand(1,99999);
	$_SESSION["SONG_ID"] = $song_id;	

	//input
	$sql   	= "INSERT into playlist (song_name,artist,event_id,song_id) VALUES('" . $song_name . "','" . $artist . "','" . $event_id . "','" . $song_id . "')";
	$success 	= $conn->query($sql);
	 
	//database check
	if (!$success) { die("Couldn't enter data: ".$conn->error);}

	//output
	echo "Song ID: " . $song_id . $artist;	

	//close the database
	$conn->close(); 

	//return
	header("Location:  {$_SERVER['HTTP_REFERER']}");
	die;
?>
