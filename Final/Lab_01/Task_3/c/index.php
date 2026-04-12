<?php 
    if(isset($_POST["dob"])) {
        $dob = $_REQUEST['dob'];
        if(!empty($dob)){
            echo "Hello, $dob!";
        } else {
            echo "Please enter your dob.";
        }

    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task 3: B</title>
    <style>
      fieldset {
        width: 100px;
      }
    </style>
  </head>
  <body>
    <h1>Task 3: B</h1>
    <form action="" method="post">
      <fieldset>
        <legend>Date of Birth</legend>
        <input type="date" id="dob" name="dob" value="<?php if(isset($_POST['dob'])) { echo $_POST['dob']; } ?>" />
        <hr />
        <button type="submit">Submit</button>
      </fieldset>
    </form>
  </body>
</html>
