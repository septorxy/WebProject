<?php 
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/includes/dbhINC.php';
    // List loaded from store
    $sql = "SELECT *  FROM `menu` WHERE `Type` LIKE 'Starters' ORDER BY `MenuID`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $menu[] = $row;
    }
    echo $twig->render('header.html');
    
    echo "<div class = 'MenuSettings'><br><h1 style='text-align: center'>Menu</h1>";
    echo "<h2>Starters</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $menu));

    $sql = "SELECT *  FROM `menu` WHERE `Type` LIKE 'Platters' ORDER BY `MenuID`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $menu[] = $row;
    }
    echo "<h2>Platters</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $menu));

    $sql = "SELECT *  FROM `menu` WHERE `Type` LIKE 'Salads' ORDER BY `MenuID`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $menu[] = $row;
    }
    echo "<h2>Salads</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $menu));

    $sql = "SELECT *  FROM `menu` WHERE `Type` LIKE 'Kids_Menu' ORDER BY `MenuID`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $menu[] = $row;
    }
    echo "<h2>Kids Menu</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $menu));

    $sql = "SELECT *  FROM `menu` WHERE `Type` LIKE 'Pizza' ORDER BY `MenuID`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $menu[] = $row;
    }
    echo "<h2>Pizza</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $menu));

    $sql = "SELECT *  FROM `menu` WHERE `Type` LIKE 'Burgers' ORDER BY `MenuID`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $menu[] = $row;
    }
    echo "<h2>Burgers</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $menu));

    $sql = "SELECT *  FROM `menu` WHERE `Type` LIKE 'Pasta' ORDER BY `MenuID`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $menu[] = $row;
    }
    echo "<h2>Pasta</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $menu));

    $sql = "SELECT *  FROM `menu` WHERE `Type` LIKE 'Mains - Meat' ORDER BY `MenuID`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $menu[] = $row;
    }
    echo "<h2>Mains - Meat & Poultry</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $menu));

    $sql = "SELECT *  FROM `menu` WHERE `Type` LIKE 'Mains - Fish' ORDER BY `MenuID`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $menu[] = $row;
    }
    echo "<h2>Mains - Fish</h2><br>";
    echo $twig->render('Menu.html', array('menuA' => $menu));

    $sql = "SELECT *  FROM `menu` WHERE `Type` LIKE 'Set-Menu' ORDER BY `MenuID`  ASC";
    $result = mysqli_query($conn, $sql);

    if (!$result) { die("Query Failed."); }

    $menu = array();
    
    while ($row = mysqli_fetch_assoc($result)) {      
        $menu[] = $row;
    }
    echo "<h2>Set-Menus</h2></div><br>";
    echo $twig->render('Menu.html', array('menuA' => $menu));
?>




