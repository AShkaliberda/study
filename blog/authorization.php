<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 30.09.2017
 * Time: 19:51
 */
ini_set('locale', 'UTF-8');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Авторизація</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>
<div class="wrapper">

    <form class="form-horizontal" method="POST" action="admin.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="login">Login:</label>
            <div class="col-sm-10">
                <input name="login" type="name" class="form-control" id="login" placeholder="Enter login" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pass">Password:</label>
            <div class="col-sm-10">
                <input name="pass" type="password" class="form-control" id="pass" placeholder="Enter password" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
            </div>
        </div>
    </form>
</div>