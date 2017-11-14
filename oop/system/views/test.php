<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Онлайн-тестування</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>
<div class="wrapper">
    <?php foreach($questions as $question): ?>
    <h3><?=$question[0]; ?></h3>

    <form class="form-horizontal" method="POST" action="quest2.php">
        <div class="checkbox">
            <label><input type="checkbox" name="answer" value="<?=$answer['points']; ?>"><span> <?=$answer['text']; ?></span></label>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit">Далі</button>
            </div>
        </div>
    </form>
    <?endforeach; ?>
</div>