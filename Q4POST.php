<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<form method="POST">
    Enter Name
    <input type="text" name="person">
    Enter Favourite Food
    <input type="text" name="favFood">
    Enter your ID Number
    <input type="text" name="ID">
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