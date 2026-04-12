<?php 
    $gender = $_REQUEST['gender'];
    if ($gender == '') {
        echo "Please select your gender.";
    } else {
        echo "Hello, $gender!";
    }

?>