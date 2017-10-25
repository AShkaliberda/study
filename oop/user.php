<?php
class User {
    const DB_NAME = "user.db";
    private $_db = null;

    function __construct(){
        $this->_db = new SQLite3(self::DB_NAME);
        if (filesize(self::DB_NAME) == 0) {
            $sql = " CREATE TABLE user(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL)";
        $this->_db->exec($sql) or die($this->_db->lastErrorMsg());
        }
    }

    function __destruct(){
        unset($this->_db);
    }
}