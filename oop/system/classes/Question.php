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
        if(!$id) return;

        $sql = "SELECT q.id, q.title, q.test_id, a.id, a.text, a.question_id, a.points
                FROM questions q
                LEFT JOIN answers a
                  ON q.id = a.question_id
                   WHERE q.test_id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $data = null;
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if(!$row['question_id']) return;
            $data[$row['question_id']][0] = $row['title'];
            $data[$row['question_id']][$row['id']] = $row['text'];
        }
        return $data;
    }
}