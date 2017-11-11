<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 07.10.2017
 * Time: 18:31
 */
session_start();
if($_POST['answer2'] === 'undefined'){
    $_SESSION['count'] += 10;
}
$_SESSION['answer2'] = $_POST['answer2'];
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
<<<<<<< Updated upstream
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/styles.css" rel="stylesheet">
=======
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
>>>>>>> Stashed changes

</head>

<body>
<div class="wrapper">

    <h3>Напишіть, як розшифровується PHP</h3>

    <form class="form-horizontal" method="POST" action="quest4.php">
        <div class="form-group">
            <div class="col-sm-10">
                <input name="answer3" type="text" class="form-control" id="answer3" placeholder="PHP - це" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit">Далі</button>
            </div>
        </div>
    </form>
</div>