<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 10.10.2017
 * Time: 16:33
 */

if($_GET["page"] === "delete"){
    unlink('file.txt');
    echo "<a href='file.php'>Назад</a>";
    return;
}


    $title = trim(htmlspecialchars($_POST['title']));
    $text = trim(htmlspecialchars($_POST['text']));
    $filename = 'file.txt';
    $handlie = fopen($filename, 'w');
    fwrite($handlie, $title);
    fwrite($handlie, $text);
    setcookie('name', $title, time()+300);
    setcookie('content',$text, time()+300);
    fclose($handlie);

    $handlie= fopen($filename, 'r');
    $content = fread($handlie, filesize($filename));
    fclose($handlie);

    echo $content;
    echo "<br>";
    echo "<a href='editfile.php'>Редагувати файл</a>";
    echo "<br>";
    echo "<a href='?page=delete'>Видалити файл</a>";




