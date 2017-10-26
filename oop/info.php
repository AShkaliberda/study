<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 25.10.2017
 * Time: 17:39
 */

require_once("connect.php");

if(!empty($_POST['save'])):
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $patronymic = $_POST['patronymic'];
    $pass = $_POST['pass'];
    $sex = $_POST['sex'];

    $user->editUser($id, $first_name, $last_name, $patronymic, $pass, $sex);
    header('Location:info.php');
endif;
?>

<h2>Інформація про користувачів:</h2>
<br>
    <table style="border:2px dashed black;">
        <thead style="background: #fc0">
            <tr>
                <td>Імя</td>
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
            <td><a href = "editUserForm.php?id=<?=$item['id']?>&first_name=<?=$item['first_name']?>&last_name=<?=$item['last_name']?>
                                                   &patronymic<?=$item['patronymic']?>&password<?=$item['pass']?>
                                                   &sex<?=$item['sex']?>">Редагувати</a></td>
            <td><a href = "deleteUserForm.php?id=<?=$item['id']?>">Видалити</a></td>
            <td><a href = "userInfo.php?id=<?=$item['id']?>">Інфо</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="index.php">На головну</a>

