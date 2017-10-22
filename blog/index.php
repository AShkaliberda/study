<?php
require_once('functions.php');
$link = db_connect();
$posts = show_posts($link);

require_once('views/header.php');
require_once('views/main.php');
require_once('views/footer.php');