<?php
    error_reporting(0);
    //Header, Footer and DB connection loaded
    require_once __DIR__ . '/header.php';
    require_once __DIR__ . '/footer.php';
    require_once __DIR__ . '/includes/dbhINC.php';
    
    //Looking for cookies and putting them in an array
    if(isset($_COOKIE['Fav']) && $_COOKIE['Fav']!=null){
        //Cookies are serialized to properly store the array properly
        $data = unserialize($_COOKIE['Fav'], ["allowed_classes" => false]);
        if(sizeof($data) > 1){
        foreach ($data as $value){
            if($value != 0){
                //Queries being sent for each menuID in the cookie
                $sql = "SELECT * FROM `menu` WHERE `MenuID` = $value";
                $result = mysqli_query($conn, $sql);
               
                while ($row = mysqli_fetch_assoc($result)) {
                    //Changing prices to show to 2 decimal places
                    $row['Price'] = number_format($row['Price'], 2, '.', '');
                    if($row['Price_Potential'] != null){
                        $row['Price_Potential'] = number_format($row['Price_Potential'], 2, '.', '');
                    }
                    //Loading into an array
                    $favMenu[] = $row;
                }
            }
        }
        if (isset($_POST['submit'])) {
            $subject = 'Your Favourites';
            $emailTo = $_POST['email'];
        
            if (!empty($emailTo)) {
                $iterator = 0;
                foreach ($data as $value){
                    $sql = "SELECT * FROM `menu` WHERE `MenuID` = $value";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $iterator++;
                        $name[$iterator] = $row['Name'];
                        $ingredients[$iterator] = $row['Ingredients'];
    
                        $message = $message.$iterator." ".$name[$iterator]."\n".$ingredients[$iterator]."\n--------------\n";
                    }
                 }
    
                $txt = "These are your favourites from Ta Randi Restaurant: \n". $message;
    
                $emailFrom = 'tarandirestaurant1@gmail.com';
                
                $headers = 'From: ' . $emailFrom;
                
                if (mail($emailTo, $subject, $txt, $headers)) {
                    $status = 'Your Favourites have been succesfully sent!';
                } else {
                    $status = 'Something went wrong, please try again.';
                }
    
            } else {
                echo 'Please fill all the fields.';
            }
        }
        //Rendering the page with the menu items
        echo $twig->render('Menu.html', ['Menu' => $favMenu, 'status' => $status]);
    }else{
        //Case none found
        echo $twig->render('layout.html');
        echo "<title>Favourites</title>";
        echo "<div id='middle_sec'>You have not selected any favourites yet! Go to our Menu to add some :)</div>";
    }
    }else{
        //Case none found
        echo $twig->render('layout.html');
        echo "<title>Favourites</title>";
        echo "<div id='middle_sec'>You have not selected any favourites yet! Go to our Menu to add some :)</div>";
    }

?>  