<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 07.10.2017
 * Time: 16:42
 */
session_start();
if($_POST['one'] === 'Расмус Лердорф'){
    $_SESSION['count'] = 10;
}
$quest = [];
$quest += $_POST;
$_SESSION['answer'] = $quest;
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

    <h3>Якого типу даних не існує у PHP?</h3>

    <form class="form-horizontal" method="POST" action="quest3.php">
        <div class="radio">
            <label><input type="radio" name="answer2" value="null"><span>null</span></label>
        </div>
        <div class="radio">
            <label><input type="radio" name="answer2" value="true"><span>true</span></label>
        </div>
        <div class="radio">
            <label><input type="radio" name="answer2" value="undefined"><span>undefined</span></label>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit">Далі</button>
            </div>
        </div>
    </form>
</div>
