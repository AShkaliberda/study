<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 29.10.2017
 * Time: 9:28
 */

session_start();
require_once('functions.php');
$db = db_connect();

if(!empty($_POST['add_comment'])):
    $comment = trim(htmlspecialchars($_POST['add_comment']));
    $article_id = (int)$_POST['id'];

    addComment($db, $article_id, $comment);
    header("Location: ".$_SERVER['HTTP_REFERER']);
endif;

if(!empty($_GET['delete'])):
    $id = (int)$_GET['delete'];
    deleteComment($db, $id);
    header("Location: ".$_SERVER['HTTP_REFERER']);
endif;

if(!empty($_GET['edit'])):
    $id = (int)$_GET['edit'];
    $comment = getComment($db, $id);
    include('views/editComment.php');
endif;

if(!empty($_POST['edit_comment'])):
    $comment = $_POST['comment'];
    $id = (int)$_POST['edit_comment'];
    editComment($db, $id, $comment);
    header('Location:index.php');
    endif;