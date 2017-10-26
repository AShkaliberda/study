<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 26.10.2017
 * Time: 20:17
 */

$menu = [];

if($_SESSION['name']=== 'admin'):
    $menu['admin/admin.php'] = 'В адмінку';
    $menu['admin/admin.php?action=logout'] = 'Вийти';
elseif($_SESSION['name'] === 'user'):
    $menu['views/user_page.php'] = 'Консоль';
    $menu['admin/admin.php?action=logout'] = 'Вийти';
else:
    $menu["authorization.php"] = "Авторизація";
endif;