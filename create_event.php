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
  
  <div class="container row" style="text-align:center">
    <h1>Event Created</h1>
    
   <?php
 
require 'connection.php';
$conn           = Connect();
$event_name     = $conn->real_escape_string($_POST['event_name']);
$event_id       = $conn->real_escape_string($_POST['event_id']);
$dj_password    = $conn->real_escape_string($_POST['dj_password']);
$password       = $conn->real_escape_string($_POST['password']);
$privacy        = $conn->real_escape_string($_POST['privacy']);
$query          = "INSERT into event (event_name,event_id,dj_password,password,privacy) VALUES('" . $event_name . "','" . $event_id . "','" . $dj_password . "','" . $password . "','" . $privacy . "')";
$success        = $conn->query($query);
 
if (!$success) { 
        die("Couldn't enter data: ".$conn->error); 
}
 
echo "Event Name: $event_name<br>";
echo "Event ID: $event_id<br>";
echo "Privacy: $privacy<br>";

$conn->close(); 
?>

  </div>
  <script>
 function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {document.getElementById('ifYes').style.display = 'block';}
    else document.getElementById('ifYes').style.display = 'none';}
  </script>
</body>
</html>
