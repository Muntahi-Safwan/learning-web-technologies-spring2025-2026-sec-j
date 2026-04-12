<?php 
    if(isset($_POST["name"])) {
        $name = $_REQUEST['name'];
        if(!empty($name)){
            echo "Hello, $name!";
        } else {
            echo "Please enter your name.";
        }

    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task 1: B</title>
    <style>
      fieldset {
        width: 100px;
      }
    </style>
  </head>
  <body>
    <h1>Task 1: B</h1>
    <form action="" method="post">
      <fieldset>
        <legend>Name</legend>
        <input type="text" id="name" name="name" value="" />
        <hr />
        <button type="submit">Submit</button>
      </fieldset>
    </form>
  </body>
</html>
