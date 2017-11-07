<?php
session_start();
if($_POST['answer4'] === '6'){
    $_SESSION['count'] += 10;
}
$_SESSION['answer4'] = $_POST['answer4'];


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Онлайн-тестування з основ PHP</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/styles.css" rel="stylesheet">

</head>

<body>

<div class="wrapper">

    <h3>Ваші відповіді: </h3>

    <p>1. <?php foreach($_SESSION['answer'] as $key => $value){
        echo $value.  "; ";
        }?></p>
    <p>2. <?= $_SESSION['answer2'] . ";"; ?></p>
    <p>3. <?= $_SESSION['answer3'] . ";"; ?></p>
    <p>4. <?= $_SESSION['answer4'] . "."; ?></p>

    <p><i>Ви набрали: <?= $_SESSION['count'] . " балів із 40"; ?></i></p>

    <form class="form-horizontal" method="POST" action="index.php">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit">Пройти ще раз</button>
                <?php session_destroy();?>
            </div>
        </div>
    </form>
</div>
