<?php
    //Load our autoloader
    require_once __DIR__.'/vendor/autoload.php';

    //Specify our Twig templates location
    $loader = new \Twig\Loader\FilesystemLoader('templates');


    //Instantiates our Twig
    $twig = new \Twig\Environment($loader);
