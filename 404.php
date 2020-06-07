<?php
error_reporting(0);
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/footer.php';
echo $twig->render('404.html');
?>