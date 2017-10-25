<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 25.10.2017
 * Time: 17:39
 */

require_once("connect.php");
require_once('functions.php');


foreach ($user->getUsers() as $item): ?>
<li><?= $item["first_name"] . " " . $item["last_name"]?>
    <a href = "editUserForm.php?id=<?=$item['id']?>&first_name=<?=$item['first_name']?>&last_name=<?=$item['last_name']?>">Edit</a>
</li>
<?php endforeach; ?>