<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 02.11.2017
 * Time: 17:41
 */
class User
{
    public $id;
    public $login;
    public $role;

    public function validation($db) {

        $login = trim(htmlspecialchars($_POST['login']));
        $password = trim(htmlspecialchars($_POST['pass']));
        $password = md5($password);

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
                $this->id = (int)$row['id'];
                $this->login = $row['login'];
                $this->role = $row['role'];
            endif;
        endforeach;
    }
}