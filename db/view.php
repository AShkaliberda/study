<?php
/**
 * Created by PhpStorm.
 * User: php0-2-15
 * Date: 12.10.2017
 * Time: 15:07
 */
require_once('config_db.php');
$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);
if (!$link){
    echo "Error: " .mysqli_connect_errno(). ' :' .mysqli_connect_error();
}

if(isset($_GET['delete'])){
    $sql = "DELETE FROM user WHERE id=$_GET[delete]";
    mysqli_query($link, $sql);
    header('Location:view.php');
}

$query = 'SELECT brand, id FROM user';
$result = mysqli_query($link, $query);


while ($row = mysqli_fetch_assoc($result)) {
    echo $row['id'] .' ' .$row['brand'] .' ';
    echo "<a href=?car=$row[brand]&id=$row[id]>Edit</a> <a href=?delete=$row[id]>Delete</a>";
    echo "<br>";
}






