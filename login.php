require_once(‘config.php’);
session_start();
$error=”;

if (isset($_POST[‘submit’])) {

if (empty($_POST[‘event_name’]) || empty($_POST[‘password’])) {
$error = “Username or Password is invalid”;
}
else {
$username=$_POST[‘event_name’];
$password=$_POST[‘password’];
$db = new PDO($event);

$statement = $db->prepare(“SELECT * FROM event  WHERE Username = :event_name”);
$statement->bindParam(‘:event_name’, $username);
$statement->execute();

$row = $statement->fetchObject();

if (!empty($row)){
$hash = $row->Password;

$match = password_verify($password, $hash);

if($match == false) {
echo “Username / Password invalid.”;
} else {
$_SESSION[‘login_user’] = $event_name;
header(“location: profile.php”);
}
}

$row = null;
$statement = null;
$db = null;
}
}
