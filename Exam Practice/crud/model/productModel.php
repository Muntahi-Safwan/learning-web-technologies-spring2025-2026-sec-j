<?php

// DB Connection
function dbConnection()
{
    $con = mysqli_connect("127.0.0.1", "root", "", "webtech");
    if (!$con) {
        return false;
    }
    return $con;
}

// Create Product
function createProduct($name, $description, $price, $quantity)
{
    $con = dbConnection();
    if (!$con) {
        return false;
    }
    $sql = "INSERT INTO products (name, description, price, quantity) VALUES ('$name', '$description', $price, $quantity)";
    if (!mysqli_query($con, $sql)) {
        return false;
    }
    return mysqli_query($con, $sql);
}

// Update Product
function updateProduct($id, $name, $description, $price, $quantity)
{
    $con = dbConnection();
    if (!$con) {
        return false;
    }
    $sql = "UPDATE products SET name='$name', description='$description', price=$price, quantity=$quantity WHERE id=$id";
    if (!mysqli_query($con, $sql)) {
        return false;
    }
    return mysqli_query($con, $sql);
}

// Delete Product
function deleteProduct($id)
{
    $con = dbConnection();
    if (!$con) {
        return false;
    }
    $sql = "DELETE FROM products WHERE id=$id";
    if (!mysqli_query($con, $sql)) {
        return false;
    }
    return mysqli_query($con, $sql);
}

// Get Product by ID
function getProductById($id)
{
    $con = dbConnection();
    if (!$con) {
        return false;
    }
    $sql = "SELECT * FROM products WHERE id=$id";
    if (!mysqli_query($con, $sql)) {
        return false;
    }
    return mysqli_query($con, $sql);
}

// Get All Products
function getAllProducts()
{
    $con = dbConnection();
    if (!$con) {
        return false;
    }
    $sql = "SELECT * FROM products";
    if (!mysqli_query($con, $sql)) {
        return false;
    }
    return mysqli_query($con, $sql);
}

?>
