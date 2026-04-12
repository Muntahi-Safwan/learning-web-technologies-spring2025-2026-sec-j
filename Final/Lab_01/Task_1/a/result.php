<?php 
    $name = $_REQUEST['name'];
    if(!empty($name)){
        echo "Hello, $name!";
    } else {
        echo "Please enter your name.";
    }

?>