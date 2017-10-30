<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 26.10.2017
 * Time: 11:05
 */
require_once("connect.php");

$id = (int)$_GET['id'];
$user->deleteUser($id);
header('Location:info.php');