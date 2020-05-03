<?php
require_once __DIR__.'/bootstrap.php';
echo $twig->render('header.html');
echo $twig->render('index.html');
?>