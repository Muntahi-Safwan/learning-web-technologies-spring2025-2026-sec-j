<?php
session_start();

if (!isset($_SESSION['registration'])) {
	$_SESSION['registration'] = [
		'name' => '',
		'email' => '',
		'username' => '',
		'password' => '',
		'confirm_password' => '',
		'gender' => '',
		'day' => '',
		'month' => '',
		'year' => ''
	];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$_SESSION['registration'] = [
		'name' => trim($_POST['name'] ?? ''),
		'email' => trim($_POST['email'] ?? ''),
		'username' => trim($_POST['username'] ?? ''),
		'password' => $_POST['password'] ?? '',
		'confirm_password' => $_POST['confirm_password'] ?? '',
		'gender' => $_POST['gender'] ?? '',
		'day' => trim($_POST['day'] ?? ''),
		'month' => trim($_POST['month'] ?? ''),
		'year' => trim($_POST['year'] ?? '')
	];

	header('Location: login.php');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration - xCompany</title>
	<style>
		body {
			background: #f0f0f0;
			font-family: "Times New Roman", serif;
		}

		.wrapper {
			width: 100%;
			margin: 10px auto;
			border: 2px solid #666;
			background: #fff;
		}

		.header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 25px;
			border-bottom: 2px solid #666;
		}

		.brand {
			font-size: 46px;
			color: #18a558;
			font-weight: bold;
		}

		.brand-text {
			color: #111;
			font-size: 46px;
			margin-left: 5px;
		}

		.nav a {
			color: #0000ee;
			font-size: 24px;
		}

		.content {
			border-bottom: 2px solid #666;
			padding: 60px 0;
		}

		.register-box {
			width: 540px;
			margin: 0 auto;
			border: 2px solid #888;
			padding: 12px 14px;
		}

		.register-box legend {
			font-size: 42px;
			font-weight: bold;
			padding: 0 5px;
		}

		.row {
			font-size: 20px;
			margin: 8px 0;
		}

		.row label {
			display: inline-block;
			width: 155px;
		}

		.row input[type="text"],
		.row input[type="password"],
		.row input[type="email"] {
			width: 240px;
			height: 34px;
			font-size: 28px;
			vertical-align: middle;
		}

		.hint {
			font-size: 28px;
			font-weight: bold;
			margin-left: 4px;
		}

		.line {
			border: none;
			border-top: 2px solid #b0b0b0;
			margin: 8px 0;
		}

		.mini-box {
			border: 2px solid #999;
			padding: 10px;
			margin: 10px 0;
		}

		.mini-box legend {
			font-size: 28px;
			padding: 0 4px;
		}

		.gender {
			font-size: 28px;
		}

		.gender input {
			transform: scale(1.2);
			vertical-align: middle;
		}

		.dob input {
			width: 48px;
			height: 30px;
			font-size: 24px;
			text-align: center;
			vertical-align: middle;
		}

		.dob .format {
			font-size: 28px;
			font-style: italic;
			margin-left: 4px;
			vertical-align: middle;
		}

		.actions {
			margin-top: 10px;
		}

		.actions input {
			font-size: 24px;
			padding: 4px 8px;
		}

		.footer {
			text-align: center;
			padding: 14px;
			font-size: 28px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div><span class="brand">X</span><span class="brand-text">Company</span></div>
			<div class="nav">
				<a href="index.php">Home</a> |
				<a href="login.php">Login</a> |
				<a href="registration.php">Registration</a>
			</div>
		</div>

		<div class="content">
			<form method="post" action="">
				<fieldset class="register-box">
					<legend>REGISTRATION</legend>

					<div class="row">
						<label for="name">Name</label>:
						<input type="text" id="name" name="name" required>
					</div>
					<hr class="line">

					<div class="row">
						<label for="email">Email</label>:
						<input type="email" id="email" name="email" required>
						<span class="hint">i</span>
					</div>
					<hr class="line">

					<div class="row">
						<label for="username">User Name</label>:
						<input type="text" id="username" name="username" required>
					</div>
					<hr class="line">

					<div class="row">
						<label for="password">Password</label>:
						<input type="password" id="password" name="password" required>
					</div>
					<hr class="line">

					<div class="row">
						<label for="confirm_password">Confirm Password</label>:
						<input type="password" id="confirm_password" name="confirm_password" required>
					</div>
					<hr class="line">

					<fieldset class="mini-box">
						<legend>Gender</legend>
						<div class="gender">
							<label><input type="radio" name="gender" value="Male" required> Male</label>
							<label><input type="radio" name="gender" value="Female"> Female</label>
							<label><input type="radio" name="gender" value="Other"> Other</label>
						</div>
					</fieldset>

					<fieldset class="mini-box">
						<legend>Date of Birth</legend>
						<div class="dob">
							<input type="text" name="day" maxlength="2" required> /
							<input type="text" name="month" maxlength="2" required> /
							<input type="text" name="year" maxlength="4" required>
							<span class="format">(dd/mm/yyyy)</span>
						</div>
					</fieldset>

					<hr class="line">

					<div class="actions">
						<input type="submit" value="Submit">
						<input type="reset" value="Reset">
					</div>
				</fieldset>
			</form>
		</div>

		<div class="footer">Copyright &copy; 2017</div>
	</div>
</body>
</html>
