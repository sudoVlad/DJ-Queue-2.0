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
  
  <style>
body{
  height:100%;
}
</style>
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
        <li><a href="learn.html">Learn More</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

      <h1 style="text-align:center">User Mode</h1>

    <row style="text-align:center">
      <div class="col-lg-6 col-sm-12">
       <h3>Add to Playlist</h3>
         <form action="add_song.php" method="post">
<<<<<<< HEAD:user.php
          Song Name <input type="text" name="song_name" required> <p id="demo"></p>
          Artist <input type="text" name="artist" required><br>
=======
          Song Name <input type="text" name="event_id" required> <p id="demo"></p>
          Artist <input type="text" name="event_name" required><br>
>>>>>>> b09acdf19ed3177d7d2d07e664f03e9725aa12dc:user.html
          <p id="demo"></p>
          <input type="submit" value="Sent">
        </form>
      </div>
      
      <div style="color:white; background-color: black" class="col-lg-6 col-sm-12">
       <h3>View Playlist</h3>
<<<<<<< HEAD:user.php
	<?php
	require 'connection.php';
	$conn	= Connect();
	if($conn->connect_error){ die("Connection Failed: " . $conn->connect_error);}
	$sql = "SELECT song_name, artist FROM playlist";
	$result = $conn->query($sql);

	//output
	if ($result->num_rows > 0)
	{
    		while($row = $result->fetch_assoc())
		{
			echo $row["song_name"] . " " . $row["artist"];
			echo "<br>";
		}	
	}
	else
	{
		echo "0 results";
	}

	//close db connection
	$conn->close();
	?>
       <div id="result"></div>
=======
       <div id="result"></div>
      <script>
      if(typeof(EventSource) !== "undefined") {
          var source = new EventSource("demo_sse.php");
          source.onmessage = function(event) {
              document.getElementById("result").innerHTML += event.data + "<br>";
          };
      } else {
          document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
      }
      </script>
>>>>>>> b09acdf19ed3177d7d2d07e664f03e9725aa12dc:user.html
      </div>
    </row>
</body>
</html>
