<?php

$con = mysqli_connect("127.0.0.1", "root", "", "course_db");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
