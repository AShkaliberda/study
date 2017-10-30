<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 30.10.2017
 * Time: 22:36
 */

class Post
{
    protected $id;
    protected $title;
    protected $content;
    protected $preview;
    protected $img;

    function __construct($id, $title, $content,$preview,$img)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->preview = $preview;
        $this->img = $img;
    }

    function add($db){
        $sql = 'INSERT INTO articles(`title`, `content`, `preview`, `img`) VALUES(:title,:content,:preview, :img )';
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':content', $this->content);
        $stmt->bindParam(':preview', $this->preview);
        $stmt->bindParam(':img', $this->img);
        $stmt->execute();

        echo "Пост добавлен успешно";
    }

}