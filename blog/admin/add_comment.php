<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 28.10.2017
 * Time: 13:47
 */
session_start();
require_once('../functions.php');
$db = db_connect();

$comment = trim(htmlspecialchars($_POST['comment']));
$article_id = (int)$_POST['id'];

addComment($db, $article_id, $comment);
header("Location:../single.php?id=$article_id");