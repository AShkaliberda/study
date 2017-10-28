<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 22.10.2017
 * Time: 21:41
 */
session_start();
require_once('functions.php');
$db = db_connect();
echo $_SESSION['login'];

echo (checkAuthor($db, 24));


