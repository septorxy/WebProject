<?php
    error_reporting(0);
    require_once __DIR__ . '/bootstrap.php';
    require_once __DIR__ . '/includes/dbhINC.php';

    echo $twig->render('header.html');
    
    //Looking for cookies and putting them in an array
    if(isset($_COOKIE['Fav']) && $_COOKIE['Fav']!=null){
        //Cookies are serialized to properly store the array properly
        $data = unserialize($_COOKIE['Fav'], ["allowed_classes" => false]);
        if(sizeof($data) > 1){
        foreach ($data as $value){
            if($value != 0){
                $sql = "SELECT * FROM `menu` WHERE `MenuID` = $value";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    $favMenu[] = $row;
                }
            }
        }
        
        //Display
        echo "<h1>Favourites Menu</h1>";
        echo "<form  method='post'>
        <input type='text' name='email' placeholder='Your E-mail' required=''>
        <button type='submit' name='submit'>Send Favourites?</button>
        </form>";
        echo $twig->render('Menu.html', array('menuA' => $favMenu));
        echo "<title>Favourites</title>";
    }else{
        echo $twig->render('layout.html');
        echo "<title>Favourites</title>";
        echo "<div id='middle_sec'>You have not selected any favourites yet! Go to our Menu to add some :)</div>";
    }
    }else{
        echo $twig->render('layout.html');
        echo "<title>Favourites</title>";
        echo "<div id='middle_sec'>You have not selected any favourites yet! Go to our Menu to add some :)</div>";
    }



    if (isset($_POST['submit'])) {
        //Code?
    }
?>
