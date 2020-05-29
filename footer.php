<?php
    require_once __DIR__ . '/bootstrap.php';
    if(!isset($_COOKIE['CookiesAcc'])){
        echo $twig->render('footer.html');
    }

    if (isset($_POST['CookiesUnderstand'])) {
        setcookie('CookiesAcc', "Understood", time() + (86400 * 30));
        header("Refresh:0");
    }
?>