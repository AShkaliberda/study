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

    <h2>Інформація про користувачів:</h2>
    <br>
    <table style="border:2px dashed black;" cellpadding="10">
        <thead style="background: #fc0">
        <tr>
            <td>Ім`я</td>
            <td>Прізвище</td>
            <td>Edit</td>
            <td>Delete</td>
            <td>Інфо</td>
        </tr>
        </thead>
        <?php foreach ($user->getUsers() as $item): ?>
            <tr>
                <td><?= $item["first_name"]; ?></td>
                <td><?= $item["last_name"]; ?></td>
                <td><a href = "editUserForm.php?id=<?=$item['id']?>">Редагувати</a></td>
                <td><a href = "deleteUserForm.php?id=<?=$item['id']?>">Видалити</a></td>
                <td><a href = "userInfo.php?id=<?=$item['id']?>">Інфо</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php">На головну</a>
</div>
</body>


