<?php

session_start();

$action = $_POST["action"] ?? "";

if ($action === "register") {
    $name = $_POST["name"] ?? "";
    $password = $_POST["password"] ?? "";
    $email = $_POST["email"] ?? "";

    $src = $_FILES["profile_picture"] ?? null;

    if ($src) {
        $des = "/public/profile_pictures/" . $src["name"];
        move_uploaded_file($src["tmp_name"], $des);
    }

    $_SESSION["user"] = [
        "name" => $name,
        "email" => $email,
        "password" => $password,
        "profile_picture" => $des ?? null,
    ];

    echo "User registered successfully!";
} elseif ($action == "login") {
    $email = $_POST["email"] ?? "";
    $password = $_POST["password"] ?? "";

    $user = $_SESSION["user"] ?? null;

    if ($user["email"] === $email && $user["password"] === $password) {
        setcookie("user", $email, time() + 3600, "/");
        echo "Login successful!";
    } else {
        echo "Invalid email or password.";
    }
}

?>
