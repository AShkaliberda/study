<?php
session_start();
require_once('functions.php');
require_once('menu.php');
$db = db_connect();

$articles = select_data($db, (int)$_GET['id']);
$reviews = getCommentsForArticle($db, (int)$_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Сторінка запису</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>
<?php foreach ($articles as $article): ?>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">На головну</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <?php navigation($menu); ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4"><?=$article['title']; ?></h1>

            <hr>

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="<?=$article['img']; ?>" alt="">

            <hr>

            <!-- Post Content -->
            <p><?=$article['content']; ?></p>
            <?php endforeach; ?>
            <hr>
            <!-- Comments Form -->
            <div class="comment-card-body">
                <h5 class="card-header">Коментарі</h5>
            <?php foreach($reviews as $review):
                echo"<p class='author'>$review[author]</p>
                <p class='comment'>$review[comment]</p>";

                if($review['author'] === $_SESSION['login']){
                    echo "<div class='action'>
                    <a class='comment-link' href='comment.php?edit=$review[id]'>Редагувати</a>
                    <a class='comment-link' href='comment.php?delete=$review[id]'>Видалити</a>
                    </div>";
                }
            endforeach; ?>
            </div>

            <?php if(isset($_SESSION['name'])): ?>
            <div class="card my-4">
                <h5 class="card-header">Додати коментар:</h5>
                <div class="card-body">
                    <form method="POST" action="comment.php">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="add_comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="id" value="<?= $_GET['id']; ?>">Залишити коментар</button>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            <div class="widget">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>

        </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
