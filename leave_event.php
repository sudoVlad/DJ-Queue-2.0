<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
	//remove session variables
	session_unset();

	//destroy the session
	session_destroy();
?>

</body>
</html>
