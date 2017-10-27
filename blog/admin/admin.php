<?php
session_start();
require_once('../functions.php');
$db = db_connect();


if($_GET['action'] === 'logout'):
    session_destroy();
    header("Location:../index.php");
endif;

if($_SESSION['name'] === 'admin'):

    if(!empty($_POST['edit'])):
        $changes = select_data($db, (int)$_POST['edit']);
        include('../views/edit.php');
        exit;
    endif;

    if(!empty($_POST['id'])):
        $img = $_POST['image'];
            if(!empty($_FILES)):
                $img = uploadImg('img');
            endif;
        edit_post($db, $_POST['title'], $_POST['content'], $_POST['preview'], $img, (int)$_POST['id']);
        include('../views/admin_page.php');
        exit;
    endif;

    if(!empty($_POST['delete'])):
        delete_post($db, (int)$_POST['delete']);
        header('Location:admin.php');
    endif;

    include('../views/admin_page.php');

endif;
?>