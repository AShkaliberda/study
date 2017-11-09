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
require_once('classes/Answer.php');

$obj = new Question();
$obj2 = new Answer();

$questions = $obj->getQuestions($db, (int)$_GET['id']);
include('views/test.php');