<?php
class User {
    const DB_NAME = "users.db";
    private $_db = null;

    function __construct(){
        $this->_db = new SQLite3(self::DB_NAME);
        if (filesize(self::DB_NAME) == 0) {
            $sql = " CREATE TABLE users(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        patronymic VARCHAR(30) NOT NULL,
        pass VARCHAR(32) NOT NULL,
        sex VARCHAR(30) NOT NULL)";
        $this->_db->exec($sql) or die($this->_db->lastErrorMsg());
        }
    }

    function clearStr($name){
        $name = trim(htmlspecialchars($name));
        return $name;
    }

    function getUsers()
    {
        $sql = "SELECT id, first_name, last_name, patronymic, pass, sex
            FROM users
            ORDER BY id DESC";
        $res = $this->_db->query($sql);
        if (!$res):
            return false;
        else:
            return $this->db2Arr($res);
        endif;
    }

    function getUser($id){
        $sql = "SELECT first_name, last_name, patronymic, pass, sex FROM users WHERE id=$id";
        $res = $this->_db->query($sql);
        if (!$res):
            return false;
        else:
            return $this->db2Arr($res);
        endif;
    }

    function db2Arr($data){
        $arr = [];
        while ($row = $data->fetchArray(SQLITE3_ASSOC))
            $arr[] = $row;
        return $arr;
    }


    function saveUser($first_name, $last_name, $patronymic, $password, $sex){
        $sql = "INSERT INTO users(first_name, last_name, patronymic, pass, sex)
            VALUES ('$first_name', '$last_name', '$patronymic', '$password', '$sex')";
        return $this->_db->exec($sql);
    }

    function editUser($id, $firstname, $last_name, $patronymic, $pass, $sex){
        $sql = "UPDATE users SET first_name='$firstname',
                                 last_name = '$last_name',
                                 patronymic='$patronymic',
                                 pass='$pass',
                                 sex='$sex' WHERE id=$id";
        return $this->_db->exec($sql);
    }

    function deleteUser($id){
        $sql = "DELETE FROM users WHERE id=$id";
        return $this->_db->exec($sql);
    }

    function __destruct(){
        unset($this->_db);
    }
}