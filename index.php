<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
	<title>YottaIntelligent Pvt Limited </title>
</head>

<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>
	<br>
	Hello, <?php
			foreach ($user_data as $user) {
				print_r($user);
				echo "<br>";
			}
			?>
</body>

</html>