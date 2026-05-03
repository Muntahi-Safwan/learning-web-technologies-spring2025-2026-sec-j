<?php
session_start();

if (isset($_POST['product'])) {
    $product = json_decode($_POST['product']);

    if (!isset($_SESSION['products'][$product->id])) {
        echo 'product not found';
        exit;
    }

    $_SESSION['products'][$product->id]['name'] = $product->name;
    $_SESSION['products'][$product->id]['description'] = $product->description;
    $_SESSION['products'][$product->id]['price'] = $product->price;
    $_SESSION['products'][$product->id]['quantity'] = $product->quantity;

    echo 'Product updated successfully.';
    exit;
}
echo 'please submit the form...';

// if (isset($_POST['submit'])) {
//     $id = trim($_POST['id']);
//     if (!isset($_SESSION['products'][$id])) {
//         echo "product not found";
//         exit;
//     }

//     $_SESSION['products'][$id]['name'] = trim($_POST['name']);
//     $_SESSION['products'][$id]['description'] = trim($_POST['description']);
//     $_SESSION['products'][$id]['price'] = trim($_POST['price']);
//     $_SESSION['products'][$id]['quantity'] = trim($_POST['quantity']);

//     header('location: ../view/product_list.php');
//     exit;
// }
// echo "please submit the form...";