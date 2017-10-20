<?php
require_once('config.php');

function navigation (array $arr){
    foreach($arr as $key => $value){
        echo "<ul class='navbar-nav'>
                <li class='nav-item'><a class='nav-link' href=$key.php?page=$key> $value </a></li>";
    }
}

