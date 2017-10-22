<?php
    require_once('../functions.php');
    $db = db_connect();

    if(validation($db)):
        session_start();
        $_SESSION['name'] = 'admin';
        include('../views/admin_page.php');
    elseif($_SESSION['name'] === 'admin'):
        include('../views/admin_page.php');
    else:
        header('Location:../authorization.php');
    endif;

?>