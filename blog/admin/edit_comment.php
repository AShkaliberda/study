<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 28.10.2017
 * Time: 22:03
 */
session_start();
require_once('../functions.php');
$db = db_connect();

if($_SERVER['REQUEST_METHOD'] === 'POST'):
    $comment = $_POST['comment'];
    $id = (int)$_POST['comment_id'];
    editComment($db, $id, $comment);
    header('Location:../index.php');
endif;


$id = (int)$_GET['id'];
$comment = getComment($db, $id);
include('../views/editComment.php');