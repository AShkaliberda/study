<?php
session_start();
require_once('functions.php');
require_once('menu.php');

$db = db_connect();
$posts = show_posts($db);

if(!empty($GET['articles_id'])):
    $article_id = (int)$_GET['article_id'];
    include("views/single.php?$article_id");
    exit;
endif;

require_once('views/header.php');
require_once('views/main.php');
require_once('views/footer.php');