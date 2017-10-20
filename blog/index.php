<?php
require_once('functions.php');
$link = db_connect();
$posts = show_posts($link);
//var_dump($posts);die;

require_once('header.php');
require_once('main.php');
require_once('footer.php');