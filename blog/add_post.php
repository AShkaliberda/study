<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 17.10.2017
 * Time: 22:43
 */

if($_SERVER['REQUEST_METHOD'] === 'POST'):

    require_once('functions.php');
    $db = db_connect();

    $title = $_POST['title'];
    $content = $_POST['content'];
    $preview = $_POST['preview'];
    $preview = readMore($preview);
    $img = uploadImg('img');

    add_post($db, $title, $content, $preview, $img);
    header('Location:index.php');

    endif;

