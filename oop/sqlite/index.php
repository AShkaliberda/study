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

</head>

<body>
<div class="wrapper">
<form class="form-horizontal" method="post" action="addUserAction.php">
    <div class="form-group">
        <label class="control-label col-sm-2" for="first">Firstname:</label>
            <div class="col-sm-10">
                <input type="text" name="first_name" id="first" class="form-control" required>
            </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="last">Lastname:</label>
        <div class="col-sm-10">
            <input type="text" name="last_name" id="last" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="patronymic">Patronymic:</label>
        <div class="col-sm-10">
            <input type="text" name="patronymic" id="patronymic" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="pass">Password:</label>
        <div class="col-sm-10">
            <input type="password" name="pass" id="pass" class="form-control" required>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="sex">Sex:</label>
        <div class="col-sm-10">
            <input type="radio" name="sex" value="male"> Male
            <input type="radio" name="sex" value="female"> Female
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" class="form-control">Submit</button>
        </div>
    </div>

</form>
</div>


