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

        if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            yield $row;
        }
    }
}