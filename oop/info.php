<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 25.10.2017
 * Time: 17:39
 */

require_once("connect.php");

if(!empty($_POST['id'])):
    $id = (int)$_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $patronymic = $_POST['patronymic'];
    $pass = $_POST['pass'];
    $sex = $_POST['sex'];

    $user->editUser($id, $first_name, $last_name, $patronymic, $pass, $sex);
endif;

include('infoPage.php');

?>

