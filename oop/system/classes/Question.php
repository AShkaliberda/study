<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 08.11.2017
 * Time: 16:59
 */
class Question
{
    public function getQuestions($db, $id){
        $sql = "SELECT `id`, `title` FROM questions WHERE `test_id`=:id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }
}