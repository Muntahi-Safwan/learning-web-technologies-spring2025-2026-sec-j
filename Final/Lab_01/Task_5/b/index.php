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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Task 5: b</title>
    <style>
      fieldset {
        width: 200px;
      }
    </style>
  </head>
  <body>
    <h1>Task 5: b</h1>
    <form action="" method="post">
      <fieldset>
        <legend>Degree</legend>
        <input type="checkbox" name="degree[]" value="ssc" id="ssc" />
        <label>SSC</label>
        <input type="checkbox" name="degree[]" value="hsc" id="hsc" />
        <label>HSC</label>
        <input type="checkbox" name="degree[]" value="bsc" id="bsc" />
        <label>BSc</label>
        <input type="checkbox" name="degree[]" value="msc" id="msc" />
        <label>MSc</label>

        <hr />
        <button type="submit">Submit</button>
      </fieldset>
    </form>
  </body>
</html>
