<?php
session_start();
require_once('Post.php');
require_once('menu.php');
require_once('config.php');

$post = new Post();
$posts = $post->getAllPosts($db);

require('views/header.php');
require_once('views/main.php');
require_once('views/footer.php');