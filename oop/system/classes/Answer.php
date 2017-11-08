<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 08.11.2017
 * Time: 17:30
 */
class Answer
{
    public function getAnswers($db, $id){
        $sql = "SELECT `id`, `text`, `points` FROM answers WHERE `question_id`=:id";
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