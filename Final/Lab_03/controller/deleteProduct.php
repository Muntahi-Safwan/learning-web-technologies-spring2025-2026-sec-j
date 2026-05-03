<?php
session_start();

if (isset($_POST['data'])) {
    $payload = json_decode($_POST['data'], true);
    $id = $payload['id'] ?? '';

    if ($id !== '' && isset($_SESSION['products'][$id])) {
        unset($_SESSION['products'][$id]);
        echo 'Product deleted successfully.';
    } else {
        echo 'Product not found.';
    }
    exit();
}

// $id = $_GET['id'] ?? '';
// if ($id !== '' && isset($_SESSION['products'][$id])) {
//     unset($_SESSION['products'][$id]);
// }
// header('location: ../view/product_list.php');
exit;