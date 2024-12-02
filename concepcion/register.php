<?php  
require_once 'models.php'; 
require_once 'handleForms.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Registration</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f9;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			min-height: 100vh;
		}
		.container {
			background: #fff;
			padding: 30px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
			border-radius: 10px;
			width: 400px;
			text-align: center;
		}
		h1 {
			color: #333;
		}
		form {
			margin-top: 20px;
		}
		form div {
			margin-bottom: 15px;
		}
		label {
			display: block;
			margin-bottom: 5px;
			font-weight: bold;
			color: #555;
			text-align: left;
		}
		input[type="text"], input[type="password"], input[type="submit"] {
			width: calc(100% - 20px);
			padding: 10px;
			margin: 0 auto;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 1em;
			box-sizing: border-box;
		}
		input[type="submit"] {
			background-color: #28a745;
			color: #fff;
			border: none;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}
		input[type="submit"]:hover {
			background-color: #218838;
		}
		.message {
			margin-bottom: 15px;
			font-weight: bold;
			text-align: center;
		}
		.message.success {
			color: #28a745;
		}
		.message.error {
			color: #dc3545;
		}
		.footer {
			margin-top: 15px;
			color: #555;
		}
		.footer a {
			color: #007bff;
			text-decoration: none;
		}
		.footer a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Register Here!</h1>
		<?php  
		if (isset($_SESSION['message']) && isset($_SESSION['status'])) {
			$class = $_SESSION['status'] == "200" ? "success" : "error";
			echo "<div class='message $class'>{$_SESSION['message']}</div>";
		}
		unset($_SESSION['message']);
		unset($_SESSION['status']);
		?>
		<form action="handleForms.php" method="POST">
			<div>
				<label for="username">Username</label>
				<input type="text" name="username" id="username" required>
			</div>
			<div>
				<label for="first_name">First Name</label>
				<input type="text" name="first_name" id="first_name" required>
			</div>
			<div>
				<label for="last_name">Last Name</label>
				<input type="text" name="last_name" id="last_name" required>
			</div>
			<div>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" required>
			</div>
			<div>
				<label for="confirm_password">Confirm Password</label>
				<input type="password" name="confirm_password" id="confirm_password" required>
			</div>
			<div>
				<input type="submit" name="insertNewUserBtn" value="Register">
			</div>
		</form>
		<div class="footer">
			<p>Already have an account? <a href="login.php">Login here</a>.</p>
		</div>
	</div>
</body>
</html>
