<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 25.10.2017
 * Time: 23:15
 */
session_start();
require_once('functions.php');
$db = db_connect();

$checkUser = validation($db);

    if($checkUser === 'admin'):
        $_SESSION['name'] = 'admin';
        header('Location:index.php');

    elseif($checkUser === 'user'):
        $_SESSION['name'] = 'user';
        header("Location:index.php");
    else:
        header('Location:authorization.php');
    endif;

