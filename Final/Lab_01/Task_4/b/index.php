<?php 
    if(isset($_POST["gender"])) {
        $gender = $_REQUEST['gender'];
        if(!empty($gender)){
            echo "Hello, $gender!";
        } else {
            echo "Please enter your gender.";
        }

    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task 4: b</title>
    <style>
      fieldset {
        width: 200px;
      }
    </style>
  </head>
  <body>
    <h1>Task 4 : b</h1>
    <form action="" method="post">
      <fieldset>
        <legend>Gender</legend>
        <input type="radio" id="male" name="gender" value="male" />
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" />
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other" />
        <label for="other">Other</label>
        <hr />
        <button type="submit">Submit</button>
      </fieldset>
    </form>
  </body>
</html>
