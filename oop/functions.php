<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 25.10.2017
 * Time: 17:08
 */
function saveUser($first_name, $last_name){
    $sql = "INSERT INTO user(first_name, last_name)
            VALUES ('$first_name', '$last_name')";
    return $this->_db->exec($sql);
}


function getUsers()
{
    $sql = "SELECT id, first_name, last_name
            FROM user
            ORDER BY id DESC";
    $res = $this->_db->query($sql);
    if (!$res):
        return false;
    else:
        return $this->db2Arr($res);
    endif;
}


private function db2Arr($data){
    $arr = [];
    while ($row = $data->fetchArray(SQLITE3_ASSOC))
        $arr[] = $row;
    return $arr;
}