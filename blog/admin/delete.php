<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 22.10.2017
 * Time: 21:49
 */
if($_SERVER['REQUEST_METHOD'] === 'POST'):

session_start();
require_once('../functions.php');
$db = db_connect();
    if(!empty($_POST['delete'])):
        $id = (int)$_POST['delete'];
        delete_post($db, $id);
        header('Location:admin.php');
    endif;
endif;