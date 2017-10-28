<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 28.10.2017
 * Time: 21:12
 */

session_start();
require_once('../functions.php');
$db = db_connect();


$id = (int)$_GET['id'];
deleteComment($db, $id);
header("Location: ".$_SERVER['HTTP_REFERER']);