<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 25.10.2017
 * Time: 17:03
 */
require_once("connect.php");

$fn = $user->clearStr($_POST["first_name"]);
$ln = $user->clearStr($_POST["last_name"]);
$pt = $user->clearStr($_POST["patronymic"]);
$pass = $user->clearStr($_POST["pass"]);
$sex = $user->clearStr($_POST["sex"]);
$user->saveUser($fn, $ln, $pt, $pass, $sex);

header("Location:info.php");