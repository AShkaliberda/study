<?php

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 02.11.2017
 * Time: 9:36
 */
class Comm
{
    /**
     * @param $db
     * @param $article_id
     * @param $comment
     */
    function addComment($db, $article_id, $comment){
        $user_id = $_SESSION['id'];
        $author = $_SESSION['login'];


        $sql = 'INSERT INTO `comments`(`article_id`, `user_id`, `comment`, `author`) VALUES (:article_id, :user_id, :comm, :author)';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':comm', $comment, PDO::PARAM_STR);
        $stmt->bindParam(':author', $author, PDO::PARAM_STR);
        $stmt->execute();
    }

    function getCommentsForArticle($db, $id){
        $sql = "SELECT `id`, `author`, `comment` FROM comments WHERE `article_id`=:id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    function deleteComment($db, $id) {
        $sql = "DELETE FROM comments WHERE `id` = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    function getComment($db, $id){
        $sql = "SELECT `comment` FROM comments WHERE id=:id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            return $row['comment'];
        }
    }

    function editComment($db, $id, $comment){
        $sql = "UPDATE comments SET `comment` = :comment WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}