<?php
    session_start();
    if (!isset($_SESSION["user"]) || !isset($_SESSION["status"]) || $_SESSION["status"] !== true) {
    header("Location: login.php");
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome Home!<?php echo $_SESSION['username'];?></h1>
        <a href='product_list.php'>User list</a> |
        <a href='../controller/logout.php'>Logout</a>
</body>
</html>