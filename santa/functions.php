<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 14.10.2017
 * Time: 17:28
 */

function createFile($sender, $recipient){
    $filename = $sender.'.txt';
    $handle = fopen($filename, 'w' );
    fwrite($handle, $recipient);
    fclose($handle);
}
function addInfo($name, $email){
    $_SESSION['users'][] = $name;
    $_SESSION['emails'][] = $email;
}

function addMessage($name){
    $filename = $name.'.txt';
    $handle = fopen($filename, "r");
    $content = fread($handle, filesize($filename));
    fclose($handle);
    return $content;
}
