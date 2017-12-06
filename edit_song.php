<?php 
	//start session
	session_start();
	
	//connect to database
	require 'connection.php';
	$conn    	= Connect();

	//input
	$song_id 	= $conn->real_escape_string($_POST['song_id']);
	
	//variable declaration
	$song_name_exists = isset($_POST['song_name']);
	$artist_exists 	= isset($_POST['artist']);

	//check if POST exists(since its optional), set variables, update database
	if( $song_name_exists && $artist_exists ){
		//variable set
		$song_name = $conn->real_escape_string($_POST['song_name']); 	
                $artist = $conn->real_escape_string($_POST['artist']);
	
		//update database
        	$sql 	= "UPDATE `playlist` SET `song_name` = '" . $song_name . "', `artist` = '" . $artist . "'  WHERE `song_id` = '" . $song_id . "'";
	}
	else if( $artist_exists ){ 
		//variable set
		$artist	= $conn->real_escape_string($_POST['artist']);
        
		//update database
		$sql  	= "UPDATE `playlist` SET = `artist` = '" . $artist . "'  WHERE `song_id` = '" . $song_id . "'";
	}
	else if( $song_name_exists ){
		//variable set
                $song_name = $conn->real_escape_string($_POST['song_name']);    
        
		//update database
		$sql 	= "UPDATE `playlist` SET `song_name` = '" . $song_name . "' WHERE `song_id` = '" . $song_id . "'";			
	}
	else{
		echo "There is nothing to change";	//maybe use a swtich
	}

	//database check
	$success = $conn->query($sql);
	if (!$success){ die("Couldn't enter data: ".$conn->error);}

	//close the database
	$conn->close(); 

	//return
	header("Location: {$_SERVER['HTTP_REFERER']}");
?>
