<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
  <!--Code from form and php is copied from Q4POST-->
  <!--Outputting code is part of Q5POST-->

<form method="POST">
  <input type="text" name="person" placeholder="Enter Name">
  <input type="text" name="favFood" placeholder="Enter Favourite Food">
  <input type="text" name="ID" placeholder="Enter ID Number">
    <input type="submit" name="submit">
</form>

<?php
//Copied from Q4POST
if (isset($_POST['submit'])) {
    $name = $_POST['person'];
    $food = $_POST['favFood'];
    $UserID = $_POST['ID'];

    //Q5POST
    echo "<h1>Successful Entry<br></h1>";

    echo "<h2>Your name is </h2> ".$name."<br>";

    echo "<h2>Your favorite food is</h2> ".$food."<br>";

    echo "<h2>Your ID Card is </h2>".$UserID."<br>";
}

?>
</body>
</html>
