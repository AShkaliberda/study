<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 30.10.2017
 * Time: 21:42
 */

class DB
{

private $connect;

public function __construct()
{
    if(!file_exists('config.php')):
        throw new Exception('Config db not found');
    endif;
    require_once('config.php');

    try {
        $this->connect = new PDO('mysql:host=localhost; dbname=test', USER, PASSWORD);

    }catch(PDOException $e){
        echo $e->getMessage();
        die;
    }

}

}