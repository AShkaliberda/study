<?php
session_start();
require_once('functions.php');
require_once('menu.php');

$db = db_connect();
$posts = show_posts($db);

require_once('views/header.php');
require_once('views/main.php');
require_once('views/footer.php');