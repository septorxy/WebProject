<?php
//https://stackoverflow.com/questions/365191/how-to-get-time-difference-in-minutes-in-php
//https://krazytech.com/programs/php-display-last-visited-date-time
$expiry = 60 * 60 * 24 * 60 + time();
setcookie('prevVisit', time(), $expiry);
if(isset($_COOKIE['prevVisit']))
{
    $to_time = time();
    $from_time = $_COOKIE['prevVisit'];
    echo "Page last visited ".round(abs($to_time - $from_time),2). " seconds ago";
}
else
    echo "You've never visited this page!";
?>