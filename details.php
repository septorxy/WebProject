<?php

require_once __DIR__ . '/bootstrap.php';

// List loaded from store
require_once __DIR__ . '/includes/dbhINC.php';
// List loaded from store
$toFind = $_GET["a"];
$sql = "SELECT *  FROM `menu` WHERE `MenuID` = $toFind ORDER BY `MenuID`  ASC";
$result = mysqli_query($conn, $sql);
$menu[] = null;
while ($row = mysqli_fetch_assoc($result)) {
    $menu[] = $row;
}


if (count($menu)<2) {
    echo $twig->render('header.html');
    die($twig->render('404.html'));
    
}else{
    // Render view
    echo $twig->render('header.html');  
    echo $twig->render('details.html', ['menuA' => $menu]);
}
