<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<form method="GET">
    Enter Name
    <input type="text" name="person">
    Enter Favourite Food
    <input type="text" name="favFood">
    Enter your ID Number
    <input type="text" name="ID">
    <input type="submit" name="submit">
</form>
<?php
if (isset($_GET['submit'])) {
    $name = $_GET['person'];
    $food = $_GET['favFood'];
    $UserID = $_GET['ID'];
}
?>
</body>
</html>