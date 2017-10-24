<?php
session_start();
require_once('../functions.php');
$db = db_connect();

if($_SESSION['name'] === 'admin'):

    if(!empty($_POST['edit'])):
        $id = (int)$_POST['edit'];
        $changes = select_data($db, $id);
        include('../views/edit.php');
        exit;
    endif;

    if(!empty($_POST['id'])):
        edit_post($db, $_POST['title'], $_POST['content'], $_POST['preview'], (int)$_POST['id']);
        include('../views/admin_page.php');
        exit;
    endif;

    include('../views/admin_page.php');

elseif (validation($db)):
    $_SESSION['name'] = 'admin';
    include('../views/admin_page.php');
    exit;
else:
    header('Location:../authorization.php');
endif;
?>