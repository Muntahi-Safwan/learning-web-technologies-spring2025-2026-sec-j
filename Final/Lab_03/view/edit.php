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
    <title>Edit Product</title>
</head>
<body>
        <h1>Edit Product</h1>
        <a href='product_list.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>
        <div id="response"></div>

        <form method="post" onsubmit="return updateProduct()" enctype="multipart/form-data">
            ID:             <input type="text" id="id" name="id" value="<?=$product['id']?>" readonly/> <br>
            Name:           <input type="text" id="name" name="name" value="<?=$product['name']?>"/> <br>
            Description:    <input type="text" id="description" name="description" value="<?=$product['description']?>"/> <br>
            Price:          <input type="text" id="price" name="price" value="<?=$product['price']?>"/> <br>
            Quantity:       <input type="text" id="quantity" name="quantity" value="<?=$product['quantity']?>"/> <br>
                            <input type="submit" name="submit" value="Update"/>
                        
        </form>
        <script src="../controller/editProduct.js"></script>
</body>
</html>