<?php 
	//start session
	session_start(); 

	// remove all session variables
	session_unset();

	// destroy the session
	session_destroy();

	//redirection
	header( 'Location: index.php' );
?>
</div>
