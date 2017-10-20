<?php
/**
 * Created by PhpStorm.
 * User: php0-2-15
 * Date: 12.10.2017
 * Time: 15:39
 */
require_once('config_db.php');

$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);
if (!$link){
    echo "Error: " .mysqli_connect_errno(). ' :' .mysqli_connect_error();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['brand'];
    $sql = 'INSERT INTO user(brand) VALUES(?)';
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, 's', $name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('Location:view.php');
}