<?php
require_once('functions.php');
$link = db_connect();
$posts = show_posts($link);

if(!empty($_GET['id'])):
    $articles = select_data($link, (int)$_GET['id']);
    include('views/single.php');
    exit;
endif;

require_once('views/header.php');
require_once('views/main.php');
require_once('views/footer.php');