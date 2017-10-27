<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 27.10.2017
 * Time: 12:03
 */
session_start();
require_once('../functions.php');
$db = db_connect();

$comment = trim(htmlspecialchars($_POST['comment']));

addComment($db, $comment);
header('Location:../views/single.php');