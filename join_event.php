<?php 
	//start session	
	session_start();
	
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
		if($dj_password == $row['dj_password']){ $_SESSION["DJ_MODE"] = "on"; }

 	      	//diconnect to database
        	$conn->close();

		//redirection
		header( 'Location: home.php' );	
	}
	else{
        	//diconnect to database
        	$conn->close();
	
		//redirection
		header( 'Location: join.php' );
	}
?>
