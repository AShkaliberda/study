<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Редагувати коментар</title>

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/styles.css" rel="stylesheet">
    <script src="../../vendor/ckeditor/ckeditor.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="../index.php">На головну</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../admin/add_post.php">Вийти</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper">
    <form class="form-horizontal" method="POST" action="../admin/edit_comment.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="content">Редагувати коментар:</label>
            <div class="col-sm-10">
                <textarea name="comment" cols="50" rows="10" id="editor1" name="editor1"><?= $comment; ?></textarea>
                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit" name="comment_id" value="<?= $id; ?>">Зберегти зміни</button>
            </div>
        </div>
    </form>
</div>
