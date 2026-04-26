<?php
session_start();

if (!isset($_SESSION['products'])) {
    $_SESSION['products'] = [];
}

if (isset($_POST['submit'])) {
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $price = trim($_POST['price']);
    $quantity = trim($_POST['quantity']);

    if ($id === '' || $name === '' || $description === '' || $price === '' || $quantity === '') {
        echo "null id/name/description/price/quantity!";
        exit;
    }

    $_SESSION['products'][$id] = [
        'id' => $id,
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'quantity' => $quantity
    ];

    header('location: ../view/product_list.php');
    exit;
}
echo "please submit form...";