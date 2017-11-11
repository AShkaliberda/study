<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 03.11.2017
 * Time: 17:13
 */
session_start();

require_once('classes/Test.php');
require_once('config.php');
$obj = new Test();
$tests = $obj->getAllTests($db);

require_once('views/header.php');
require_once('views/main.php');
require_once('views/footer.php');

