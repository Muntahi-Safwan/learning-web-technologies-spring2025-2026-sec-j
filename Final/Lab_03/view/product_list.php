<?php
    session_start();
    if (!isset($_SESSION["user"]) || !isset($_SESSION["status"]) || $_SESSION["status"] !== true) {
    header("Location: login.php");
    exit;
    }
    
    $products = $_SESSION['products'] ?? [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>List for Products</title>
</head>
<body>
    
        <h1>List of Products</h1>
        <a href='home.php'>back</a> |
        <a href='createProductView.php'>Create Product</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <table border=1>
        
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>QUANTITY</th>
                <th>ACTION</th>
            </tr>

            <?php  foreach($products as $product){ ?>
            <tr>
                <td><?php echo $product['id'];?></td>
                <td><?=$product['name']?></td>
                <td><?=$product['price']?></td>
                <td><?=$product['description']?></td>
                <td><?=$product['quantity']?></td>
                <td>

                    <a href="edit.php?id=<?=$product['id']?>"> EDIT </a> | 
                    <a href="../controller/deleteProduct.php?id=<?=$product['id']?>"> DELETE </a> | 
                    <a href="details.php?id=<?=$product['id']?>"> DETAILS </a> 
                </td>
            </tr>

            <?php }  ?>
        
        </table>

</body>
</html>