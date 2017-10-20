<?php require_once('eyes.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Реєстрація</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/styles.css" rel="stylesheet">
    <script src="../vendor/ckeditor/ckeditor.js"></script>

</head>

<body>
<div class="wrapper">

    <form class="form-horizontal" action="../show.php" method="post" role="form">
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
            <div class="justify">
                <label class="control-label col-sm-2" for="confirm">Confirm password:</label>
            </div>
            <div class="col-sm-10">
                <input name="confirm" type="password" class="form-control" id="confirm" placeholder="Confirm password" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="msg">Message:</label>
            <div class="col-sm-10">
                <textarea name="msg" cols="50" rows="10" id="editor1" name="editor1"></textarea>
                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>