<?php
    session_start();
    $id = $_GET['id'];
    $products = $_SESSION['products'];
    $product= [];
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

        <form method="post" action="../controller/editProduct.php" enctype="multipart/form-data">
            ID:             <input type="text" name="id" value="<?=$product['id']?>"/> <br>
            Name:           <input type="text" name="name" value="<?=$product['name']?>"/> <br>
            Description:    <input type="text" name="description" value="<?=$product['description']?>"/> <br>
            Price:          <input type="text" name="price" value="<?=$product['price']?>"/> <br>
            Quantity:       <input type="text" name="quantity" value="<?=$product['quantity']?>"/> <br>
                            <input type="submit" name="submit" value="Update"/>
                        
        </form>
</body>
</html>