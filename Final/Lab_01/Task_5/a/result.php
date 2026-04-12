<?php
if (isset($_POST["degree"]) && is_array($_POST["degree"]) && !empty($_POST["degree"])) {
    $degrees = $_POST["degree"];

    echo "You have selected:<br>";
    foreach ($degrees as $degree) {
        echo "Degree: $degree<br>";
    }
} else {
    echo "Please select at least one degree.";
}
?>