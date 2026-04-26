<?php
require_once 'auth.php';
ensureLoggedIn();

$name = userValue('user_name');
if ($name === '') {
	$name = userValue('user_username');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<style>
		body { 
            background: #f0f0f0; 
            font-family: "Times New Roman", serif; 
        }
		.wrapper { width: 920px; margin: 20px auto; border: 2px solid #666; background: #fff; }
		.header { display: flex; justify-content: space-between; align-items: center; border-bottom: 2px solid #666; padding: 22px; }
		.brand { font-size: 56px; color: #18a558; font-weight: bold; }
		.brand-text { font-size: 46px; color: #111; margin-left: 5px; }
		.top-right { font-size: 40px; }
		.top-right a { color: #0000ee; }
		.body { display: flex; min-height: 420px; border-bottom: 2px solid #666; }
		.left { width: 250px; border-right: 2px solid #666; padding: 14px; }
		.left h2 { margin: 0; font-size: 44px; }
		.left hr { border: none; border-top: 2px solid #b0b0b0; margin: 10px 0; }
		.left ul { margin: 0; padding-left: 34px; }
		.left li { font-size: 40px; }
		.right { flex: 1; padding: 24px; font-size: 52px; }
		.footer { text-align: center; padding: 12px; font-size: 42px; }
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div><span class="brand">X</span><span class="brand-text">Company</span></div>
			<div class="top-right">Logged in as <a href="view-profile.php"><?php echo htmlspecialchars($name); ?></a> | <a href="logout.php">Logout</a></div>
		</div>

		<div class="body">
			<div class="left">
				<h2>Account</h2>
				<hr>
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="view-profile.php">View Profile</a></li>
					<li><a href="edit-profile.php">Edit Profile</a></li>
					<li><a href="change-profile-picture.php">Change Profile Picture</a></li>
					<li><a href="change-password.php">Change Password</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div class="right">
				<strong>Welcome <?php echo htmlspecialchars($name); ?></strong>
			</div>
		</div>

		<div class="footer">Copyright &copy; 2017</div>
	</div>
</body>
</html>
