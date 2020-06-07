<?php

    $present = date("H:i:s");
    $expiry = 60*24*60*60+time();

    setcookie("Last" , $present, $expiry);

    if(isset($_COOKIE["Last"])){
        echo "cookie set <br/>";
        echo "Your last visit was: ";
        $min = (strtotime($present) - strtotime($_COOKIE["Last"]))/60;
        echo $min*60 . "seconds ago";
    }else
        echo "You've never visited this page!";
?>

<!https://stackoverflow.com/questions/5074688/convert-minutes-into-seconds-in-php
//https://stackoverflow.com/questions/5463549/subtract-time-in-php->
