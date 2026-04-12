<?php 
    $email = $_REQUEST['email'];
    if(!empty($email)){
        echo "Hello, $email!";
    } else {
        echo "Please enter your email.";
    }

?>