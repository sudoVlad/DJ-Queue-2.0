<?php
 
require 'connection.php';
$conn    	= Connect();
$event_name    	= $conn->real_escape_string($_POST['event_name']);
$event_id   	= $conn->real_escape_string($_POST['event_id']);
$dj_password    = $conn->real_escape_string($_POST['dj_password']);
$password 	= $conn->real_escape_string($_POST['password']);
$privacy    	= $conn->real_escape_string($_POST['privacy']);
$query   	= "INSERT into event (event_name,event_id,dj_password,password,privacy) VALUES('" . $event_name . "','" . $event_id . "','" . $dj_password . "','" . $password . "','" . $privacy . "')";
$success 	= $conn->query($query);
 
if (!$success) { 
	die("Couldn't enter data: ".$conn->error); 
}
 
echo "Event Name: $event_name<br>";
echo "Event ID: $event_id<br>";
echo "Privacy: $privacy<br>";

$conn->close(); 
?>
