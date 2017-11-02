<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 30.10.2017
 * Time: 22:29
 */
require_once('Post.php');
require_once('Comm.php');
require_once ('config.php');
var_dump($db);
$post = new Post();
$comm = new Comm();

$user_id = 1;
$author = 'admin';
$article_id = 14;
$comment = 'dfasdfasd';

$comm->addComment($db, $article_id, $comment);






