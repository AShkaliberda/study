<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 07.11.2017
 * Time: 10:55
 */
class Test
{
    public function getAllTests($db)
    {
        $sql = "SELECT `id`, `name`, `description` FROM tests";
        $res = $db->query($sql);

        if (!$res) {
            return false;
        }

        $posts = array();
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $posts[] = $row;
        }
        return $posts;
    }
}
