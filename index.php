<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
		
        body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}

		form {
			background-color: #fff;
			padding: 20px;
			margin: 50px auto;
			width: 500px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type="text"], input[type="email"], input[type="password"] {
			display: block;
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 3px;
			box-sizing: border-box;
			font-size: 16px;
		}

		input[type="submit"] {
			background-color: #008CBA;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 3px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #006E9F;
		}

		.login-link {
			display: block;
			margin-top: 20px;
			text-align: center;
		}

		.login-link a {
			color: #008CBA;
			text-decoration: none;
			font-weight: bold;
		}



	</style>
</head>
<body>
	<?php
		// Initialize variables to store form data
		$name = "";
		$email = "";
		$password = "";
		
		// If the form is submitted
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Retrieve form data
			$name = test_input($_POST["name"]);
			$email = test_input($_POST["email"]);
			$password = test_input($_POST["password"]);
			
			// TODO: Validate and process form data (e.g. store in database)
		}
		
		// Helper function to sanitize form data
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<h2>Register</h2>
		<label for="name">Name</label>
		<input type="text" id="name" name="name" value="<?php echo $name; ?>" required>

		<label for="email">Email</label>
		<input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

		<label for="password">Password</label>
		<input type="password" id="password" name="password" value="<?php echo $password; ?>" required>

		<input type="submit" value="Register">

		<div class="login-link">
			Already have an account? <a href="#">Log in</a>
		</div>
	</form>
</body>
</html>
