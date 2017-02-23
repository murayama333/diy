<?php
$notes = file("notes.txt");
if (isset($_POST["note"])) {
  $note = $_POST["note"];
  array_push($notes, $note);
  file_put_contents("notes.txt", $note . PHP_EOL, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <h1>IT CARET</h1>
    <form action="" method="post">
      <input type="text" name="note">
      <input type="submit" value="save">
    </form>
    <ul>
      <?php for($i = 0; $i < count($notes); $i++){ ?>
      <li><?php echo $notes[$i]; ?></li>
      <?php } ?>
    </ul>
  </body>
</html>
