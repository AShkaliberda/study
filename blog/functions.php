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

function validation($link)
{
    $sql = "SELECT login, password FROM users WHERE is_admin = 1";
    $result = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $admin_login = $row['login'];
        $admin_pass = $row['password'];
    }

    $user_login = trim(htmlspecialchars($_POST['login']));
    $user_password = trim(htmlspecialchars($_POST['pass']));
    $user_password = md5($user_password);

    if ($user_login === $admin_login && $user_password === $admin_pass) {
        return true;
    } else {
        return false;
    }
}

function readMore($text, $len=200){
    return mb_substr($text, 0, $len);
}

function add_post($link, $title, $content, $preview, $img){
    $sql = 'INSERT INTO articles(title, content, preview, img) VALUES(?,?,?,?)';
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, 'ssss', $title, $content, $preview, $img);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function show_posts($link){
    $sql = "SELECT id, title, content, preview, img from articles";
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

function edit_post($link, $id, $title, $content, $preview){
    $sql = "UPDATE FROM articles WHERE id = ? title = ? content = ? preview = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, 'isss', $id, $title, $content, $preview);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

function select_data($link, $id){
    $sql = "SELECT id, title, content, preview, img FROM articles WHERE id=$id";
    $result = mysqli_query($link, $sql);

    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    return $data;
}