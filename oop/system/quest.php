<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 08.11.2017
 * Time: 17:05
 */
session_start();
require_once('config.php');
require_once('classes/Question.php');

$obj = new Question();

$questions = $obj->getQuestions($db, (int)$_GET['id']);
echo "<pre>";
//var_dump($questions);
//die;

include('views/test.php');