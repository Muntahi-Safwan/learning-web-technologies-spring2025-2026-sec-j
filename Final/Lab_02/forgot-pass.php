<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Forgot Password - xCompany</title>
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
			border-bottom: 2px solid #666;
			padding: 64px 0;
		}

		.forgot-box {
			width: 560px;
			margin: 0 auto;
			border: 2px solid #888;
			padding: 14px;
		}

		.forgot-box legend {
			font-size: 44px;
			font-weight: bold;
			padding: 0 5px;
		}

		.row {
			font-size: 40px;
			margin: 10px 0;
		}

		.row input {
			width: 250px;
			height: 34px;
			font-size: 28px;
			vertical-align: middle;
		}

		hr {
			border: none;
			border-top: 2px solid #b0b0b0;
			margin: 12px 0;
		}

		.actions input[type="submit"] {
			font-size: 30px;
			padding: 4px 10px;
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
			<form method="post" action="">
				<fieldset class="forgot-box">
					<legend>FORGOT PASSWORD</legend>

					<div class="row">
						<label for="email">Enter Email:</label>
						<input type="email" id="email" name="email">
					</div>

					<hr>

					<div class="actions">
						<input type="submit" value="Submit">
					</div>
				</fieldset>
			</form>
		</div>

		<div class="footer">Copyright &copy; 2017</div>
	</div>
</body>
</html>
