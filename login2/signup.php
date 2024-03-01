<?php
session_start();

	include("connections.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$fullname = $_POST['fullname'];
		$address = $_POST['address'];
		$birthday = $_POST['birthday'];

		if (!empty($user_name) && !empty($password) && !empty($fullname) && !empty($address) && !empty($birthday))
		{
			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,fullname,address,birthday)values ('$user_id','$user_name','$password','$fullname','$address','$birthday')";

			mysqli_query($con, $query);
			header("Location: login.php");

			die;
		}else
		{
			echo "Please enter some valid information!";

		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">

		#text{

			height: 25px;
			border-radius: 5px;
			padding: 4px;
			border:solid thin #aaa;
			width: 100%;

		}

		#button{

			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightcoral;
			border: none;

		}

		#box{


			background-color: beige;
			margin: auto;
			width: 300px;
			padding: 20px;
		}

	</style>>	


	<div id="box">

		<form method="post">
			<div style="font-size: 25px;margin: 15px;color: black;">SIGNUP</div>

			<input id="text" type="text" name="user_name" placeholder="User Name"><br></br>
			<input id="text" type="password" name="password" placeholder="Password"><br></br>
			<input id="text" type="fullname" name="fullname" placeholder="Fullname"><br></br>
			<input id="text" type="address" name="address" placeholder="Address"><br></br>
			<input id="text" type="date" name="birthday" placeholder="Birthday"><br></br>

			<input id="button" type="submit" value="Signup"><br></br>
			<a href="login.php">Click to login</a><br></br>
		</form>
	</div>
</body>
</html>






<!--
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign up</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: beige;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        width: 100%;
    }

    .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .login-form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .login-form button {
        width: 100%;
        padding: 10px;
        background-color: lightcoral;
        border: none;
        border-radius: 4px;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .login-form button:hover {
        background-color: #0056b3;
    }

    .signup-link {
        text-align: center;
        margin-top: 10px;
    }

    .signup-link a {
        color: #007bff;
        text-decoration: none;
    }

    .signup-link a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>Sign up</h2>
    <form class="login-form" action="#" method="post">
        <input id= "text" type="text" name="user_name" placeholder="Username" required>
        <input id= "text" type="password" name="password" placeholder="Password" required>
        <input id= "text" type="fullname" name="fullname" placeholder="Fullname" required>
        <input id= "text" type="address" name="address" placeholder="Address" required>
        <input id= "text" type="birthday" name="birthday" placeholder="Birthday" required>
        <button type="submit">Signup</button>
    </form>
    <div class="signup-link">
        <a href="login.php">Click here to Login</a>
    </div>
</div>

</body>
</html>
-->