<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 30.10.2017
 * Time: 22:36
 */
class Post
{
    function addPost($db, $title, $content, $preview, $img){
        $sql = 'INSERT INTO articles(`title`, `content`, `preview`, `img`) VALUES (:title,:content,:preview, :img )';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->bindParam(':content', $content, PDO::PARAM_STR);
        $stmt->bindParam(':preview', $preview, PDO::PARAM_STR);
        $stmt->bindParam(':img', $img, PDO::PARAM_STR);
        $stmt->execute();
    }

    function editPost($db, $title, $content, $preview, $img, $id){
        $sql = "UPDATE articles SET `title` = :title, `content` = :content, `preview` = :preview, `img`=:img WHERE id = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindparam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':preview', $preview);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    function deletePost($db, $id){
        $sql = "DELETE FROM articles WHERE `id` = :id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    function getPost($db, $id){
        $sql = "SELECT `id`, `title`, `content`, `preview`, `img` FROM articles WHERE `id`=:id";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        $data = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    function getAllPosts($db){
        $sql = "SELECT `id`, `title`, `content`, `preview`, `img` from articles";
        $res = $db->query($sql);

        if(!$res){
            return false;
        }

        $posts = array();
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            $posts[] = $row;
        }
        return $posts;
    }

    function preview($text, $len=200){
        return mb_substr($text, 0, $len);
    }

    function uploadImg($field){
        if(0 != $_FILES[$field]['error']){
            return false;
        }
        if(is_uploaded_file($_FILES[$field]['tmp_name'])){
            $filename =  time().'.'. pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION);
            $res = move_uploaded_file($_FILES[$field]['tmp_name'], 'img/'. $filename);
            if(!$res){
                return false;
            }else{
                return 'img/'. $filename;
            }
        }
        return false;
    }

}