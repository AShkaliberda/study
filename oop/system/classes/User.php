<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 04.11.2017
 * Time: 12:02
 */
class User
{
    public function __construct($db, $login, $password){
        $sql = "INSERT INTO users(`login`, `password`) VALUES (:login, :pass)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':pass', $password);
        try {
            $stmt->execute();
        }catch(PDOException $e){
            echo 'Помилка в запиті: ' . $e->getMessage();
        }
    }

    public static function getUserInfo($db, $login, $password) {

        $sql = "SELECT `id`, `login`, `password`, `role` FROM users WHERE `login` = :login";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->execute();

        $rows = array();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $rows[] = $row;
        }

        foreach($rows as $row):
            if($login === $row['login'] && $password === $row['password']):
                $_SESSION['id'] = (int)$row['id'];
                $_SESSION['login'] = $row['login'];
                return $row['role'];
            endif;
        endforeach;
    }

    public static function checkLogin($db, $login){
        $sql = "SELECT `login` FROM users WHERE `login` = :login";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->execute();

        $res = $stmt->fetch();
        if($res){
            return false;
        }
        return true;
    }
}