<?php
require_once("connect.php");
$id = (int)$_GET['id']; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Інфо про користувача</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">

</head>

<body>

<div class="wrapper">
<h2>Інформація про користувача:</h2>
<br>
<table style="border:2px dashed black;" cellpadding="10">
    <thead style="background: #fc0">
    <tr>
        <td>Імя</td>
        <td>Прізвище</td>
        <td>По-батькові</td>
        <td>Пароль</td>
        <td>Стать</td>
    </tr>
    </thead>
    <?php foreach ($user->getUser($id) as $item): ?>
    <tr>
        <td><?= $item["first_name"]; ?></td>
        <td><?= $item["last_name"]; ?></td>
        <td><?= $item["patronymic"]; ?></td>
        <td><?= $item["pass"]; ?></td>
        <td><?= $item["sex"]; ?></td>
<?php endforeach; ?>
    </tr>
</table>
<br>
<a href="info.php"> Назад </a>
</div>
</body>