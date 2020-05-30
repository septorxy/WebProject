<?php
error_reporting(0);
require_once __DIR__ . '/bootstrap.php';
require_once __DIR__ . '/footer.php';
require_once __DIR__ . '/header.php';
// List loaded from store
require_once __DIR__ . '/includes/dbhINC.php';
// List loaded from store
$toFind = $_GET["a"];
//Preparing a statement to avoid PHP injection
if ($stmt = mysqli_prepare($conn, "SELECT *  FROM `menu` WHERE `MenuID` = ? ORDER BY `MenuID`  ASC")) {
    mysqli_stmt_bind_param($stmt, "s", $toFind);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_assoc($result)){
        $menu[] = $row;
    }
    mysqli_stmt_close($stmt);
}

$found = -1;

//Displaying page if ID found otherwise displaying a 404 page
//Here it is also detecting if the item is part of favorites
if (count($menu) < 1) {
    die($twig->render('404.html'));
} else {
    if(isset($_COOKIE['Fav'])){
        $data = unserialize($_COOKIE['Fav'], ["allowed_classes" => false]);
        $found = array_search($toFind, $data);
        $foundUnchanged = $found;
        if($found == null){
            $value = "Add to";
        }else{
            $value = "Remove from";
        }
    }else{
        $value = "Add to";
    }
    //Render view
    echo $twig->render('details.html', ['menuA' => $menu, 'value' => $value]);
}

//Functionality to add to/remove from favourties
if (isset($_POST['submit'])) {
    if($value == "Add to"){
        $temp = array($toFind);
        if(isset($_COOKIE['Fav'])){
            $new = array_merge($data, $temp);
        }else{
            //Setting cookies for the first time
            //The temp2 = 0 is there to help the previous code execute properly
            $temp2[] = 0;
            $new = array_merge($temp2, $temp);
        }
    }else if($value == "Remove from"){
        unset($data[$foundUnchanged]);
        $new = $data;
    }
    //Cookies being set
    sort($new);
    setcookie('Fav', serialize($new), time() + (86400 * 30));
    header("Refresh:0");
}