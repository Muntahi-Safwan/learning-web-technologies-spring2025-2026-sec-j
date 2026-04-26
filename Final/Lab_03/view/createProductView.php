<?php
    session_start();
   
    if (!isset($_SESSION["user"]) || !isset($_SESSION["status"]) || $_SESSION["status"] !== true) {
    header("Location: login.php");
    exit;
    }
    // $id = $_GET['id'];
    // $products = $_SESSION['products'];
    // $product= [];
    // foreach($products as $p){
    //     if($p['id'] == $id){
    //         $product = $p;
    //         break;
    //     }
    // }
?>


<html lang="en">
<head>
    <title>Create Product</title>
</head>
<body>
        <h1>Create Product</h1>
        <a href='product_list.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="../controller/createProduct.php" enctype="multipart/form-data">
            ID:             <input type="text" name="id" value="" /> <br>
            Name:           <input type="text" name="name" value=""/> <br>
            Description:    <input type="textfield" name="description" value=""/> <br>
            Price:          <input type="text" name="price" value=""/> <br>
            Quantity:       <input type="text" name="quantity" value=""/> <br>
                            <input type="submit" name="submit" value="Create"/>
                        
        </form>
</body>
</html>