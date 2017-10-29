<?php

session_start();
require_once('functions.php');
$db = db_connect();

$posts = show_posts($db);


if($_GET['action'] === 'logout'):
    session_destroy();
    header("Location:index.php");
endif;

if($_SESSION['name'] === 'admin'):

    if($_GET['action'] === 'add'):
        include('views/addPost.php');
        exit;
    endif;

    if(isset($_POST['add_post'])):
        $title = $_POST['title'];
        $content = $_POST['content'];
        $preview = $_POST['preview'];
        $preview = readMore($preview);
        $img = uploadImg('img');

        add_post($db, $title, $content, $preview, $img);
        header('Location:admin.php');
    endif;

    if(!empty($_POST['edit'])):
        $changes = select_data($db, (int)$_POST['edit']);
        include('views/editPost.php');
        exit;
    endif;

    if(!empty($_POST['edit_post'])):
        $img = $_POST['image'];
            if(!empty($_FILES)):
                $img = uploadImg('img');
            endif;
        edit_post($db, $_POST['title'], $_POST['content'], $_POST['preview'], $img, (int)$_POST['edit_post']);
        header('Location:admin.php');
    endif;

    if(!empty($_POST['delete'])):
        delete_post($db, (int)$_POST['delete']);
        header('Location:admin.php');
    endif;

    include('views/adminPage.php');
else:
    echo "Ви не маєте прав для перегляду цієї сторінки";
endif;
?>