<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 26.10.2017
 * Time: 20:17
 */

$menu = array();

if($_SESSION['name']=== 'admin'):
    $menu['admin.php'] = 'В адмінку';
    $menu['admin.php?action=logout'] = 'Вийти';
elseif($_SESSION['name'] === 'user'):
    $menu['views/userPage.php'] = 'Консоль';
    $menu['admin.php?action=logout'] = 'Вийти';
else:
    $menu["authorization.php"] = "Авторизація";
endif;