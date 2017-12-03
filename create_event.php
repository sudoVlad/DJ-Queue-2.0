<?php
 
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['e_name']);
$email   = $conn->real_escape_string($_POST['privacy']);
$subj    = $conn->real_escape_string($_POST['password']);
$message = $conn->real_escape_string($_POST['dj_password']);
$query   = "INSERT into tb_cform (e_name,privacy,password,dj_password) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>
