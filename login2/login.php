<?php


?>

<!--
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">

		#text{

			height: 25px;
			border-radius: 10px;
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
			width: 500px;
			height: 250px;
			padding: 20px;


		}


	</style>>	


	<div id="box">

		<form method="post">
			<div style="font-size: 25px;margin: 15px;color: black;text-align: center;">LOGIN</div>

			<input id="text" type="text" name="user_name"><br></br>
			<input id="text" type="password" name="password"><br></br>

			<input id="button" type="submit" value="Login"><br></br>

			<a href="signup.php">Click to signup</a><br></br>
		</form>
	</div>
</body>
</html>

-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
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
    <h2>Login</h2>
    <form class="login-form" action="#" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <div class="signup-link">
        <a href="signup.php">Click here to Sign up</a>
    </div>
</div>

</body>
</html>