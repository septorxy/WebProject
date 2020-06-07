<?php 
    error_reporting(0);
    //Header, Footer and DB connection loaded
    require_once __DIR__ . '/header.php';
    require_once __DIR__ . '/footer.php';
    require_once __DIR__.'/includes/dbhINC.php';
    //Items loaded from database
    $sql = "SELECT *  FROM `menu` ORDER BY `Type` ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    while($row = mysqli_fetch_assoc($result)){
        //Chaning price to 2 decimal places for cleaner look
        $row['Price'] = number_format($row['Price'], 2, '.', '');
        if($row['Price_Potential'] != null){
            $row['Price_Potential'] = number_format($row['Price_Potential'], 2, '.', '');
        }
        //Loading into an array
        $menu[] = $row;
    }

    //Rendering and declaring MenuSet
    $MenuSet = "defined";
    echo $twig->render('Menu.html', ['Menu' => $menu, 'MenuSet' => $MenuSet]);
?>