<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<form method="POST">
  <input type="text" name="person" placeholder="Enter Name">
  <input type="text" name="favFood" placeholder="Enter Favourite Food">
  <input type="text" name="ID" placeholder="Enter ID Number">
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['person'];
    $food = $_POST['favFood'];
    $UserID = $_POST['ID'];
}
?>
</body>
</html>
