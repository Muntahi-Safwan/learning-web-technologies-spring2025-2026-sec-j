<?php 
    $dob = $_REQUEST['dob'];
    if(!empty($dob)){
        echo "Hello, $dob!";
    } else {
        echo "Please enter your dob.";
    }

?>