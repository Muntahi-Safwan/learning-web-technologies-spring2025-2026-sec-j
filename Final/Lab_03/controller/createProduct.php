<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (isset($_POST['product'])) {
    $product = json_decode($_POST['product']);

    if ($product->id == '' || $product->name == '' || $product->description == '' || $product->price == '' || $product->quantity == '') {
        echo 'null id/name/description/price/quantity!';
        exit;
    }

    $_SESSION['products'][$product->id] = [
        'id' => $product->id,
        'name' => $product->name,
        'description' => $product->description,
        'price' => $product->price,
        'quantity' => $product->quantity
    ];

    echo 'Product created successfully.';
    exit;
}
echo 'please submit form...';

// if (isset($_POST['submit'])) {
//     $id = trim($_POST['id']);
//     $name = trim($_POST['name']);
//     $description = trim($_POST['description']);
//     $price = trim($_POST['price']);
//     $quantity = trim($_POST['quantity']);

//     if ($id === '' || $name === '' || $description === '' || $price === '' || $quantity === '') {
//         echo "null id/name/description/price/quantity!";
//         exit;
//     }

//     $_SESSION['products'][$id] = [
//         'id' => $id,
//         'name' => $name,
//         'description' => $description,
//         'price' => $price,
//         'quantity' => $quantity
//     ];

//     header('location: ../view/product_list.php');
//     exit;
// }
// echo "please submit form...";

?>