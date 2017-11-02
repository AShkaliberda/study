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

function navigation (array $arr){
    foreach($arr as $key => $value){
        echo "<ul class='navbar-nav'>
                <li class='nav-item'><a class='nav-link' href=$key>$value</a></li>";
    }
}