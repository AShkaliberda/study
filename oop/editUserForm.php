<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 26.10.2017
 * Time: 11:50
 */
require_once("connect.php");
$id = (int)$_GET['id'];?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Реєстрація</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/styles.css" rel="stylesheet">

    </head>

<body>
    <div class="wrapper">
    <?php foreach ($user->getUser($id) as $value): ?>
        <form class="form-horizontal" method="post" action="info.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="first">Firstname:</label>
                <div class="col-sm-10">
                    <input type="text" name="first_name" id="first" class="form-control" value="<?=$value['first_name']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="last">Lastname:</label>
                <div class="col-sm-10">
                    <input type="text" name="last_name" id="last" class="form-control" value="<?=$value['last_name']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="patronymic">Patronymic:</label>
                <div class="col-sm-10">
                    <input type="text" name="patronymic" id="patronymic" class="form-control" value="<?=$value['patronymic']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="pass">Password:</label>
                <div class="col-sm-10">
                    <input type="text" name="pass" id="pass" class="form-control" value="<?=$value['pass']; ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="sex">Sex:</label>
                <div class="col-sm-10">
                    <input type="text" name="sex" class="form-control" value="<?=$value['sex']; ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" name="id" value="value="<?=$id; ?>">Зберегти зміни</button>
                </div>
            </div>
        </form>
    <?php endforeach; ?>
    </div>
