<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
<form method="GET">
    <input type="text" name="person" placeholder="Enter Name">
    <input type="text" name="favFood" placeholder="Enter Favourite Food">
    <input type="text" name="ID" placeholder="Enter ID Number">

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
