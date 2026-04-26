<?php
session_start();

$id = $_GET['id'] ?? '';
if ($id !== '' && isset($_SESSION['products'][$id])) {
    unset($_SESSION['products'][$id]);
}
header('location: ../view/product_list.php');
exit;