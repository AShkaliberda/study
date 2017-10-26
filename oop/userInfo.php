<?php
require_once("connect.php");
$id = $_GET['id'];
?>
<h2>Інформація про користувача:</h2>
<br>
<table style="border:2px dashed black;">
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
