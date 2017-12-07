<?php 
	//start session	
	session_start();
	
	//connect to database
	require 'connection.php';
        $conn 		= Connect();
        if($conn->connect_error){ die("Connection Failed: " . $conn->connect_error);}

	//input
	//$user_iP	= $_SERVER['REMOTE_ADDR'];
	$event_id       = $conn->real_escape_string($_POST['event_id']);
	$password       = $conn->real_escape_string($_POST['password']);
	$dj_password	= $conn->real_escape_string($_POST['dj_password']);

	//update databse with user_IP
	//$sql            = "UPDATE `event` SET `user_IP` = '" . $user_IP . "' WHERE `event_id` = '" . $event_ip . "'";
	//$success        = $conn->query($sql);
	//error check
        //if (!$success){
        //        echo '<a href="create.html"<button type="button" class="btn-lg btn-primary active"></button>Go Back</a>';
        //        die("Try Again: ".$conn->error);
        //}

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
