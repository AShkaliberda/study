<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 22.10.2017
 * Time: 21:41
 */

require_once('functions.php');
$db = db_connect();

if(!empty($_POST['delete'])):
    $id = (int)$_POST['delete'];
    delete_post($db, $id);
endif;