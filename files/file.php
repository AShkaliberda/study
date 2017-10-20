<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 10.10.2017
 * Time: 16:29
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>File form</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/styles.css" rel="stylesheet">

</head>

<body>
<div class="wrapper">

    <form class="form-horizontal" action="edit.php" method="post" role="form">
        <div class="form-group">
            <label class="control-label col-sm-2" for="title">Filename:</label>
            <div class="col-sm-10">
                <input name="title" type="text" class="form-control" id="title">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="text">Text:</label>
            <div class="col-sm-10">
                <textarea name="text" id="text" rows="10" cols="45"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Відправити</button>
            </div>
        </div>
    </form>
</div>
