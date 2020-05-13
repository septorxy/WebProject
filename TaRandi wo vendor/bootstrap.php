<?php
    //Load our autoloader
    require_once __DIR__.'/vendor/autoload.php';

    //FOR TWIG 2.0
    //Specify our Twig templates location
    $loader = new \Twig\Loader\FilesystemLoader('templates');


    //Instantiates our Twig
    $twig = new \Twig\Environment($loader);

    /* FOR OTHER TWIG VERSIONS
    //Specify our Twig templates location
    $loader = new \Twig\Loader\FilesystemLoader('templates');


    //Instantiates our Twig
    $twig = new \Twig\Environment($loader);*/