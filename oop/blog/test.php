<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 30.10.2017
 * Time: 22:29
 */
require_once('Post.php');
require_once ('config.php');
var_dump($db);
$post = new Post();

$title = 'Title';
$content = 'Content';
$preview = 'Preview';
$img = 'path';

$post->add($db, $title, $content, $preview, $img);
$articles = $post->getAll($db);

foreach($articles as $article ):
    echo $article['title'];
endforeach;



