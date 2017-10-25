<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 25.10.2017
 * Time: 17:03
 */
require_once("connect.php");
require_once('functions.php');

$fn = $user->clearStr($_POST["first_name"]);
$ln = $user->clearStr($_POST["last_name"]);
$user->saveUser($fn, $ln);

header("Location:index.php");