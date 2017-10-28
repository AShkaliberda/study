<?php

require_once('config.php');
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 17.10.2017
 * Time: 21:06
 */
function uploadImg($field){
    if(0 != $_FILES[$field]['error']){
        return false;
    }
    if(is_uploaded_file($_FILES[$field]['tmp_name'])){
        $res = move_uploaded_file($_FILES[$field]['tmp_name'], '../img/'. $_FILES[$field]['name']);
        if(!$res){
            return false;
        }else{
            return 'img/'. $_FILES[$field]['name'];
        }
    }
    return false;
}

function db_connect(){

    $link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

    if (!$link) {
        echo "Errno code: " . mysqli_connect_errno();
        echo "Error code: " . mysqli_connect_error();
        exit;
    }
    return $link;
}

function validation($link) {

    $login = trim(htmlspecialchars($_POST['login']));
    $password = trim(htmlspecialchars($_POST['pass']));
    $password = md5($password);

    $sql = "SELECT `id`, `login`, `password`, `role` FROM users WHERE `login` = '$login'";
    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result) === 0){
        return false;
    }

    $rows = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

    foreach($rows as $row){
        if($login === $row['login'] && $password === $row['password']){
            $_SESSION['id'] = (int)$row['id'];
            $_SESSION['login'] = $row['login'];
            return $row['role'];
        }
    }
}

function readMore($text, $len=200){
    return mb_substr($text, 0, $len);
}

function add_post($link, $title, $content, $preview, $img){
    $sql = 'INSERT INTO articles(`title`, `content`, `preview`, `img`) VALUES(?,?,?,?)';
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, 'ssss', $title, $content, $preview, $img);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function show_posts($link){
    $sql = "SELECT `id`, `title`, `content`, `preview`, `img` from articles";
    $result = mysqli_query($link, $sql);

    $posts = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }
    return $posts;
}

function delete_post($link, $id){
    $sql = "DELETE FROM articles WHERE id = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function navigation (array $arr){
    foreach($arr as $key => $value){
        echo "<ul class='navbar-nav'>
                <li class='nav-item'><a class='nav-link' href=$key>$value</a></li>";
    }
}

function edit_post($link, $title, $content, $preview, $img, $id){
    $sql = "UPDATE articles SET `title` = ?, `content` = ?, `preview` = ?, `img`=? WHERE id = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssi', $title, $content, $preview, $img, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function select_data($link, $id){
    $sql = "SELECT `id`, `title`, `content`, `preview`, `img` FROM articles WHERE id=$id";
    $result = mysqli_query($link, $sql);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}

function addComment($link, $article_id, $comment){
    $user_id = $_SESSION['id'];
    $author = $_SESSION['login'];

    $sql = 'INSERT INTO comments(`article_id`, `user_id`, `comment`, `author`) VALUES(?,?,?,?)';
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, 'iiss', $article_id, $user_id, $comment, $author);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function getCommentsForArticle($link, $id){
    $sql = "SELECT `author`, `comment` from comments WHERE `id`=$id";
    $result = mysqli_query($link, $sql);

    $comments = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $comments[] = $row;
    }
    return $comments;
}

