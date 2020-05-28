<?php 
    error_reporting(0);
    require_once __DIR__ . '/header.php';
    require_once __DIR__.'/includes/dbhINC.php';
    // List loaded from store
    $sql = "SELECT *  FROM `menu` ORDER BY `Type`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    //We are asuming thta for a new type of food to be added would mean a whole rebranding of the restaurant it is sem-hard coded
    //However if we want to make it fully dynamic we just need to display row['Type'] as a header and use a search funtion to display dynamically
    while($row = mysqli_fetch_assoc($result)){
        switch($row['Type']){
            case 'Starters':    $Starters[] = $row;     break;
            case 'Platters':    $Platters[] = $row;     break;
            case 'Salads':      $Salads[] = $row;       break;
            case 'Kids Menu':   $KidMenu[] = $row;      break;
            case 'Pizza':       $Pizza[] = $row;        break;
            case 'Burgers':     $Burgers[] = $row;      break;
            case 'Pasta':       $Pasta[] = $row;        break;
            case 'Mains - Meat':$Meat[] = $row;         break;
            case 'Mains - Fish':$Fish[] = $row;         break;
            case 'Set-Menu':    $SetMenu[] = $row;      break;
            default: echo "Invalid Type";
        }
    }
    

    //Display
    echo "<div class = 'MenuSettings'><br><h1 style='text-align: center'>Menu</h1>";
    echo "<h2>Starters</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $Starters));

    echo "<h2>Platters</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $Platters));

    echo "<h2>Salads</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $Salads));

    echo "<h2>Kids Menu</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $KidMenu));

    echo "<h2>Pizza</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $Pizza));

    echo "<h2>Burgers</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $Burgers));

    echo "<h2>Pasta</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $Pasta));

    echo "<h2>Mains - Meat & Poultry</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $Meat));

    echo "<h2>Mains - Fish</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $Fish));

    echo "<h2>Set-Menus</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $SetMenu));
?>