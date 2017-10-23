<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'):
    session_start();

    require_once('../functions.php');
    $db = db_connect();

    $title = $_POST['title'];
    $content = $_POST['content'];
    $preview = $_POST['preview'];
    $preview = readMore($preview);
    $img = uploadImg('img');

    add_post($db, $title, $content, $preview, $img);
    header('Location:admin.php');
endif;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Сторінка адміна</title>

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/styles.css" rel="stylesheet">
    <script src="../../vendor/ckeditor/ckeditor.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Сторінка адміна</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="add_post.php">Додати запис</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_post.php">Вийти</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">
<form class="form-horizontal" method="POST" action="add_post.php" enctype="multipart/form-data">
    <div class="form-group">
        <label class="control-label col-sm-2" for="title">Заголовок:</label>
        <div class="col-sm-10">
            <input name="title" type="text" class="form-control" id="title" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="content">Додати пост:</label>
        <div class="col-sm-10">
            <textarea name="content" cols="50" rows="10" id="editor1" name="editor1"></textarea>
            <script>
CKEDITOR.replace( 'editor1' );
            </script>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="preview">Короткий опис:</label>
        <div class="col-sm-10">
            <textarea name="preview" rows="3" id="preview" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <input name="img" type="file">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </div>
    </div>
    </form>
</div>
