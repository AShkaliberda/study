<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 04.11.2017
 * Time: 12:02
 */
class User
{
<<<<<<< Updated upstream
    public $id;
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
=======
    public static function checkRole($db, $login, $password) {
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
=======
                $_SESSION['login'] = $row['login'];
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======

    public function saveUser($db, $login, $password, $email){
        $sql = "INSERT INTO users(`login`, `password`, `email`) VALUES (:login, :pass, :email)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':pass', $password);
        $stmt->bindParam(':email', $email);
        try {
            $stmt->execute();
        }catch(PDOException $e){
            echo 'Помилка в запиті: ' . $e->getMessage();
        }
    }

>>>>>>> Stashed changes
}