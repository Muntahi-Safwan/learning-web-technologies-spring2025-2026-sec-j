<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home - xCompany</title>
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
			padding: 55px 25px;
			border-bottom: 2px solid #666;
		}

		.content h1 {
			font-size: 48px;
			margin: 0;
		}

		.footer {
			text-align: center;
			padding: 18px;
			font-size: 28px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div>
				<span class="brand">X</span><span class="brand-text">Company</span>
			</div>
			<div class="nav">
				<a href="index.php">Home</a> |
				<a href="login.php">Login</a> |
				<a href="registration.php">Registration</a>
			</div>
		</div>
		<div class="content">
			<h1>Welcome to xCompany</h1>
		</div>

		<div class="footer">Copyright &copy; 2017</div>
	</div>
</body>
</html>
