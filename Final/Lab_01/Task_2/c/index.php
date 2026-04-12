<?php 
    if(isset($_POST["email"])) {
        $email = $_REQUEST['email'];
        if(!empty($email)){
            echo "Hello, $email! Welcome";
        } else {
            echo "Please enter your email.";
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
        <legend>Email</legend>
        <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" />
        <span title="hint: sample@example.com">i</span>
        <hr />
        <button type="submit">Submit</button>
      </fieldset>
    </form>
  </body>
</html>
