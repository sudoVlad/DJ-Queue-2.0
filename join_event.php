<?php
	// Start the session
	session_start();
?>
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
      <a class="navbar-brand" href="index.html">DJ Queue 2.0</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="create.html">Create Event</a></li>
        <li><a href="join.html">Join Event</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
 
   <div id="main" class="container row" style="text-align:center">
<?php
	//connect to database
	require 'connection.php';
        $conn 		= Connect();
        if($conn->connect_error){ die("Connection Failed: " . $conn->connect_error);}

	//input
	$event_id       = $conn->real_escape_string($_POST['event_id']);
	$password       = $conn->real_escape_string($_POST['password']);

	//database data pull
        $sql = "SELECT event_name, event_id, password FROM event";
        $result = $conn->query($sql);
	$row = $result->fetch_assoc();

	//variable check
	if( ($row["password"] === $password) ){
		//output
		echo "<h1>Welcome</h1><br>";
		echo "Event Name: " .  $row["event_name"] . "<br>";
		echo "Event ID: " . $event_id;

		//set session variables
		$_SESSION["EVENT_ID"] = $event_id;
		$_SESSION["EVENT_NAME"] = $row["event_name"];
		$_SESSION["ON"] = true;
	}else{
		//invalid output
		echo "<h1>Incorrect Credentials</h1>";
		echo "Event ID: " . $event_id . "<br>";
		echo "Given Password: " . $password . "<br>";
		echo "Actual Password: " . $row["password"];
	}

        //output
        //if ($result->num_rows > 0){
        //        while($row = $result->fetch_assoc()){
        //                echo $row["song_name"] . " " . $row["artist"];
        //                echo "<br>";
        //        }
        //}
       	//else{ echo "0 results"; }

        //diconnect to database
        $conn->close();
?>
  </div>
  <script>
 function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) 
	{document.getElementById('ifYes').style.display = 'block';}
    else {document.getElementById('ifYes').style.display = 'none';}}
  </script>
</body>
</html>
