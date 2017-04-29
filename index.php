<?php
require_once('/controllers/AnagramChecker.php');
$controller = new AnagramCheckerController;
if(isset($_POST['stringOne']) && isset($_POST['stringTwo'])) {
  $result = $controller->checkAnagram($_POST['stringOne'], $_POST['stringTwo']);
} else {
  $result = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>Anagram tester</title>
</head>
<body>
  <div class="container">
    <div class="jumbotron">
      <h1>Anagram tester</h1>
      <p>This is a quick example of how to implement an Anagram Tester usign PHP.</p>
      <p>Anagram definition can be checked in <a href="https://en.wikipedia.org/wiki/Anagram">Wikipedia</a>.</p>
    </div>
    <form action="index.php" method="post">
      <div class="form-group">
        <label for="stringOne">Insert first string:</label>
        <input class="form-control" type="text" name="stringOne" required>
      </div>
      <div class="form-group">
        <label for="stringTwo">Insert second string:</label>
        <input class="form-control" type="text" name="stringTwo" required>
      </div>
      <input class="btn btn-default" type="submit" name="submit" value="Submit">
    </form>
    <br>
    <?php echo $result; ?>
  </div>
</body>
</html>
