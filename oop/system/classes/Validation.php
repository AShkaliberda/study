<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 04.11.2017
 * Time: 12:52
 */
class Validation
{
    public function checkLogin($db){
        $login = trim(htmlspecialchars($_POST['login']));
        $sql = "SELECT `login` FROM users WHERE `login` = :login";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':login', $login);
        $res = $stmt->execute();
        if(!$res){
            return true;
        }
        return false;
    }
}