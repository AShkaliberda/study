<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 11.10.2017
 * Time: 21:21
 */
session_start();

if(isset($_SESSION['adress']) && isset($_SESSION['page'])) {

    if (in_array($_SERVER['REQUEST_URI'], $_SESSION['log'])) {
        $filename = 'log.txt';
        $handlie = fopen($filename, 'a');
        $return = 'Ви повернулись на сторінку '.$_SERVER['REQUEST_URI'].' ' .date('d D Y H:i:s') . PHP_EOL;
        fwrite($handlie, $return);
        fclose($handlie);
    }else{
        $_SESSION['log'][] = $_SERVER['REQUEST_URI'];
        $url = 'Ви вперше зайшли на сторінку: ' . $_SERVER['REQUEST_URI'] . PHP_EOL;
        $date = 'Час останнього візиту: ' . date('d D Y H:i:s') . PHP_EOL;
        $filename = 'log.txt';
        $handlie = fopen($filename, 'a');
        fwrite($handlie, PHP_EOL);
        fwrite($handlie, $url);
        fwrite($handlie, $date);
        fclose($handlie);
    }
}else {
    $_SESSION['adress'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['page'] = $_SERVER['REQUEST_URI'];
    $_SESSION['log'] = [];
    $_SESSION['log'][] = $_SERVER['REQUEST_URI'];
    $url = 'Ви вперше зайшли на сторінку: ' . $_SERVER['REQUEST_URI'] . PHP_EOL;
    $date = 'Час останнього візиту: ' . date('d D Y H:i:s') . PHP_EOL;
    $filename = 'log.txt';
    $handlie = fopen($filename, 'a');
    fwrite($handlie, PHP_EOL);
    fwrite($handlie, $url);
    fwrite($handlie, $date);
    fclose($handlie);
}