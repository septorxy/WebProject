<?php
require_once __DIR__.'/bootstrap.php';
echo $twig->render('header.html');
echo $twig->render('AboutUs.html');
error_reporting(0);
?>