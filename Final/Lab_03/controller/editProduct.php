<?php
session_start();

if (isset($_POST['submit'])) {
    $id = trim($_POST['id']);
    if (!isset($_SESSION['products'][$id])) {
        echo "product not found";
        exit;
    }

    $_SESSION['products'][$id]['name'] = trim($_POST['name']);
    $_SESSION['products'][$id]['description'] = trim($_POST['description']);
    $_SESSION['products'][$id]['price'] = trim($_POST['price']);
    $_SESSION['products'][$id]['quantity'] = trim($_POST['quantity']);

    header('location: ../view/product_list.php');
    exit;
}
echo "please submit the form...";