<?php 
    error_reporting(0);
    require_once __DIR__ . '/header.php';
    require_once __DIR__ . '/footer.php';
    require_once __DIR__.'/includes/dbhINC.php';
    // List loaded from store
    $sql = "SELECT *  FROM `menu` ORDER BY `Type` ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();

    while($row = mysqli_fetch_assoc($result)){
        $menu[] = $row;
    }

    echo $twig->render('Menu.html', array('menuA' => $menu));
?>