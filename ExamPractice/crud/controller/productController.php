<?php
require_once "../model/productModel.php";

$action = $_POST["action"] ?? ($_GET["action"] ?? "");

if ($action == "create") {
    $name = $_POST["name"] ?? "";
    $description = $_POST["description"] ?? "";
    $price = $_POST["price"] ?? 0;
    $quantity = $_POST["quantity"] ?? 0;

    if ($name == "" || $description == "" || $price == 0 || $quantity == 0) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid input",
        ]);
        exit();
    }

    $result = createProduct($name, $description, $price, $quantity);
    if ($result) {
        echo json_encode([
            "status" => "success",
            "message" => "Product created successfully",
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Failed to create product",
        ]);
    }
} elseif ($action == "update") {
    $id = $_POST["id"] ?? 0;
    $name = $_POST["name"] ?? "";
    $description = $_POST["description"] ?? "";
    $price = $_POST["price"] ?? 0;
    $quantity = $_POST["quantity"] ?? 0;

    if (
        $id == 0 ||
        $name == "" ||
        $description == "" ||
        $price == 0 ||
        $quantity == 0
    ) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid input",
        ]);
        exit();
    }

    $result = updateProduct($id, $name, $description, $price, $quantity);
    if ($result) {
        echo json_encode([
            "status" => "success",
            "message" => "Product updated successfully",
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Failed to update product",
        ]);
    }
} elseif ($action == "delete") {
    $id = $_POST["id"] ?? 0;

    if ($id == 0) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid input",
        ]);
        exit();
    }

    $result = deleteProduct($id);
    if ($result) {
        echo json_encode([
            "status" => "success",
            "message" => "Product deleted successfully",
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "Failed to delete product",
        ]);
    }
} elseif ($action == "getProducts") {
    $products = getAllProducts();
    echo json_encode([
        "status" => "success",
        "data" => $products,
    ]);
} elseif ($action == "getSingleProduct") {
    $id = $_POST["id"] ?? 0;

    if ($id == 0) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid input",
        ]);
        exit();
    }

    $product = getProductById($id);
    echo json_encode([
        "status" => "success",
        "data" => $product,
    ]);
}

?>
