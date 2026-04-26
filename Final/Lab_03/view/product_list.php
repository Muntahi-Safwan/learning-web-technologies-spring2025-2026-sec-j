<?php
    session_start();

    $products = [
        ['id'=> 1, 'name'=>'M5 Macbook Air', 'price'=> 1000, 'description'=> 'Description for Product 1', 'quantity' => 10],
        ['id'=> 2, 'name'=>'HP Victus 15', 'price'=> 1200, 'description'=> 'Description for Product 2' , 'quantity'=> 10],
        ['id'=> 3, 'name'=>'Dell XPS 17', 'price'=> 3000, 'description'=> 'Description for Product 3' , 'quantity'=> 10],
        ['id'=> 4, 'name'=>'M4 Mac Mini', 'price'=> 800, 'description'=> 'Description for Product 4' , 'quantity'=> 10],
        ['id'=> 5, 'name'=>'Asus Tuf Gaming', 'price'=> 1300, 'description'=> 'Description for Product 5', 'quantity'=> 10],
    ];
    $_SESSION['products'] = $products;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>List for Products</title>
</head>
<body>
    
        <h1>List of Products</h1>
        <a href='home.php'>back</a> |
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
                    <a href="delete.php?id=<?=$product['id']?>"> DELETE </a> | 
                    <a href="details.php?id=<?=$product['id']?>"> DETAILS </a> 
                </td>
            </tr>

            <?php }  ?>
        
        </table>

</body>
</html>