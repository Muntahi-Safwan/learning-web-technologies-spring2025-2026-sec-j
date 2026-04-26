<?php
    session_start();
    if (!isset($_SESSION["user"]) || !isset($_SESSION["status"]) || $_SESSION["status"] !== true) {
    header("Location: login.php");
    exit;
    }
    $id = $_GET['id'];
    $products = $_SESSION['products'] ?? [];
    $product = $products[$id] ?? null;
    foreach($products as $p){
        if($p['id'] == $id){
            $product = $p;
            break;
        }
    }
?>


<html lang="en">
<head>
    <title>View Product</title>
</head>
<body>
        <h1>View Product</h1>
        <a href='product_list.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="../controller/editProduct.php" enctype="multipart/form-data">
            ID:             <input type="text" name="id" value="<?=$product['id']?>" readonly/> <br>
            Name:           <input type="text" name="name" value="<?=$product['name']?>" readonly/> <br>
            Description:    <input type="text" name="description" value="<?=$product['description']?>" readonly/> <br>
            Price:          <input type="text" name="price" value="<?=$product['price']?>" readonly/> <br>
            Quantity:       <input type="text" name="quantity" value="<?=$product['quantity']?>" readonly/> <br>
                            <input type="submit" name="submit" value="Update"/>
                        
        </form>
</body>
</html>