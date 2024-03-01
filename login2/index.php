<?php
session_start();

	include("connections.php");
	include("functions.php");

	$user_data = check_login($con);


?>


<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, Nigga.

</body>
</html>	