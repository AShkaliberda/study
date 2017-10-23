<?php
    session_start();
    require_once('../functions.php');
    $db = db_connect();

    if(validation($db)):
        $_SESSION['name'] = 'admin';
        include('../views/admin_page.php');

    elseif($_SESSION['name'] === 'admin'):
        include('../views/admin_page.php');

    else:
        header('Location:../authorization.php');
    endif;

?>