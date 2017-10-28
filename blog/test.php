<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 22.10.2017
 * Time: 21:41
 */

require_once('functions.php');
$db = db_connect();

$reviews = getCommentsForArticle($db, 24);


var_dump($reviews);

foreach($reviews as $review):
    echo $review['author'];
    echo "<br>";
    echo $review['comment'];
endforeach;