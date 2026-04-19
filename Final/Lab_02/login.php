<?php
session_start();

$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$inputUsername = trim($_POST['username'] ?? '');
	$inputPassword = $_POST['password'] ?? '';

	$registeredUsername = $_SESSION['registration']['username'] ?? '';
	$registeredPassword = $_SESSION['registration']['password'] ?? '';

	if ($inputUsername === $registeredUsername && $inputPassword === $registeredPassword && $registeredUsername !== '') {
		$expireTime = time() + 600;
		setcookie('user_name', $_SESSION['registration']['name'] ?? '', $expireTime, '/');
		setcookie('user_email', $_SESSION['registration']['email'] ?? '', $expireTime, '/');
		setcookie('user_username', $_SESSION['registration']['username'] ?? '', $expireTime, '/');
		setcookie('user_password', $_SESSION['registration']['password'] ?? '', $expireTime, '/');
		setcookie('user_confirm_password', $_SESSION['registration']['confirm_password'] ?? '', $expireTime, '/');
		setcookie('user_gender', $_SESSION['registration']['gender'] ?? '', $expireTime, '/');
		setcookie('user_day', $_SESSION['registration']['day'] ?? '', $expireTime, '/');
		setcookie('user_month', $_SESSION['registration']['month'] ?? '', $expireTime, '/');
		setcookie('user_year', $_SESSION['registration']['year'] ?? '', $expireTime, '/');
		setcookie('status', 'logged_in', time() + 600, '/');
		header('Location: dashboard/dashboard.php');
		exit;
	}

	$errorMessage = 'Invalid username or password.';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - xCompany</title>
	<style>
		body {
			background: #f0f0f0;
			font-family: "Times New Roman", serif;
		}

		.wrapper {
			width: 100%;
			margin: 10px auto;
            height: 95vh;
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
            min-height: 60vh;
			padding: 58px 0;
			border-bottom: 2px solid #666;
		}

		.login-box {
			width: 560px;
			margin: 0 auto;
			border: 2px solid #888;
			padding: 15px;
		}

		.login-box legend {
			font-size: 44px;
			font-weight: bold;
			padding: 0 4px;
		}

		.form-row {
			margin: 10px 0;
			font-size: 24px;
		}

		.form-row input[type="text"],
		.form-row input[type="password"] {
			width: 250px;
			height: 34px;
			font-size: 30px;
			vertical-align: middle;
		}

		hr {
			border: none;
			border-top: 2px solid #b0b0b0;
			margin: 14px 0;
		}

		.remember {
			font-size: 20px;
			margin-bottom: 12px;
		}

		

        .actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

		.actions input[type="submit"] {
			font-size: 24px;
			padding: 4px 10px;
		}

		.actions a {
			font-size: 24px;
			color: #0000ee;
			margin-left: 6px;
			vertical-align: middle;
		}

		.message {
			width: 560px;
			margin: 0 auto 14px;
			font-size: 22px;
			color: #b00020;
		}

		.footer {
			text-align: center;
			padding: 14px;
			font-size: 44px;
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
			<?php if ($errorMessage !== ''): ?>
				<div class="message"><?php echo htmlspecialchars($errorMessage); ?></div>
			<?php endif; ?>

			<form method="post" action="">
				<fieldset class="login-box">
					<legend>LOGIN</legend>

					<div class="form-row">
						<label for="username">User Name : </label>
						<input type="text" id="username" name="username" required>
					</div>

					<div class="form-row">
						<label for="password">Password&nbsp;&nbsp;&nbsp;: </label>
						<input type="password" id="password" name="password" required>
					</div>

					<hr>

					<div class="remember">
						<label>
							<input type="checkbox" name="remember"> Remember Me
						</label>
					</div>

					<div class="actions">
						<input type="submit" value="Submit">
						<a href="forgot-pass.php">Forgot Password?</a>
					</div>
				</fieldset>
			</form>
		</div>

		<div class="footer">Copyright &copy; 2017</div>
	</div>
</body>
</html>
