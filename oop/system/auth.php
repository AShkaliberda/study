<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 25.10.2017
 * Time: 23:15
 */
session_start();
require_once('config.php');
require_once('classes/User.php');

$login = trim(htmlspecialchars($_POST['login']));
$password = trim(htmlspecialchars($_POST['pass']));
$password = md5($password);

    if(isset($_POST['register'])):
        if(User::checkLogin($db, $login)):
            $_SESSION['login'] = $login;
            $user = new User();
            $user->saveUser($db, $login, $password);
            header('Location:index.php');
        else:
        echo "Користувач з таким іменем вже є";
        endif;

    elseif(User::getUserInfo($db, $login, $password) === 'admin'):
        $_SESSION['name'] = 'admin';
        header('Location:index.php');

    elseif(User::getUserInfo($db, $login, $password) === 'user'):
        $_SESSION['name'] = 'user';
        header('Location:index.php');
    else:
        header('Location:authorization.php');
    endif;

