<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    session_start();
    require_once('../functions.php');
    $db = db_connect();

    $article_id = (int)$_POST['article'];
    $article_parts = select_data($db, $article_id);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Додати коментар</title>

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
                    <a class="nav-link" href="add_post.php">Вийти</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">
    <?php foreach($article_parts as $part ): ?>

        <h1><?=$part['title']; ?></h1>

    <form class="form-horizontal" method="POST" action="../admin/admin.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="content">Додати коментар:</label>
            <div class="col-sm-10">
                <textarea name="comment" cols="50" rows="10" id="editor1" name="editor1"></textarea>
                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit" name="author" value="<?=$part['id']; ?>">Submit</button>
            </div>
        </div>
    </form>
<?php endforeach; ?>
