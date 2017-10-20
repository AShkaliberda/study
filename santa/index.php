<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 14.10.2017
 * Time: 14:45
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Таємний Санта</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>
<div class="wrapper">
<form class="form-horizontal" method="POST" action="santa.php">
    <div class="form-group">
        <label class="control-label col-sm-2" for="adress">Enter all name and email:</label>
        <div class="col-sm-10">
            <textarea name ="adress" id="adress" cols="45" rows="10"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input type="checkbox" name="send" value="mail"> Розіслати
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" id="submit">Відправити</button>
        </div>
    </div>
</form>
</div>
</body>
