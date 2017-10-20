<?php
/**
 * Created by PhpStorm.
 * User: php0-2-15
 * Date: 12.10.2017
 * Time: 15:35
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add car</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/styles.css" rel="stylesheet">

</head>

<body>
<div class="wrapper">

    <form class="form-horizontal" method="POST" action="action.php">
        <div class="form-group">
            <label class="control-label col-sm-2" for="brand">Add car:</label>
            <div class="col-sm-10">
                <input name="brand" type="text" class="form-control" id="brand" placeholder="Add car" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit">Add</button>
            </div>
        </div>
    </form>
</div>
