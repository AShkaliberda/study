<?php
<<<<<<< Updated upstream

/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 07.11.2017
 * Time: 10:55
 */
class Test
{
    public function getAllTests($db){
        $sql = "SELECT `id`, `name`, `description` FROM tests";
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

=======
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 06.11.2017
 * Time: 22:16
 */

class Test
{
    public function __construct($db, $login){
        try {
            $sql = "CREATE TABLE $login(
                id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                answer1 VARCHAR(30) NOT NULL,
                answer2 VARCHAR(30) NOT NULL,
                answer3 VARCHAR(30) NOT NULL,
                answer4 VARCHAR(32) NOT NULL)";
            $db->exec($sql);
        }catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
>>>>>>> Stashed changes
}