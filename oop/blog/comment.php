<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 29.10.2017
 * Time: 9:28
 */
session_start();
require_once('config.php');
require_once('Comm.php');

$comm = new Comm();

if(!empty($_POST['add_comment'])):
    $text = trim(htmlspecialchars($_POST['add_comment']));
    $article_id = (int)$_POST['id'];

    $comm->addComment($db, $article_id, $text);
    header("Location: " . $_SERVER['HTTP_REFERER']);
    endif;

if(!empty($_GET['delete'])):
    $id = (int)$_GET['delete'];
    $comm->deleteComment($db, $id);
    header("Location: ".$_SERVER['HTTP_REFERER']);
endif;

if(!empty($_GET['edit'])):
    $id = (int)$_GET['edit'];
    $comment = $comm->getComment($db, $id);
    include('views/editComment.php');
endif;

if(!empty($_POST['edit_comment'])):
    $comment = $_POST['comment'];
    $id = (int)$_POST['edit_comment'];
    $comm->editComment($db, $id, $comment);
    header('Location:index.php');
    endif;