<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 26.10.2017
 * Time: 11:50
 */

require_once("connect.php");

$id = $_GET['id'];
$first_name = $_GET['first_name'];
$last_name = $_GET['last_name'];
$patronymic = $_GET['patronymic'];
$pass = $_GET['password'];
$sex = $_GET['sex'];
?>

<?php foreach ($user->getUser($id) as $value): ?>
<form method="post" action="info.php">
    <input type="hidden" name="id" value="<?=$id; ?>">
    <input type="text" name="first_name" value="<?=$value['first_name']; ?>"><br>
    <input type="text" name="last_name" value="<?=$value['last_name']; ?>"><br>
    <input type="text" name="patronymic" value="<?=$value['patronymic']; ?>"><br>
    <input type="text" name="pass" value="<?=$value['pass']; ?>"><br>
    <input type="text" name="sex" value="<?=$value['sex']; ?>"><br>
    <input type="submit" name="save">
</form>
<?php endforeach; ?>