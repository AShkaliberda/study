<?php
switch($_GET['page']) {
    case 'task.php':
        header('Location:task.php');
        break;
    case 'homework.php':
        header('Location:homework.php');
        break;
    case 'about.php':
        header('Location:about.php');
        break;
    case 'authorization.php':
        header('Location:authorization.php');
        break;
    case 'registration.php':
        header('Location:registration.php');
        break;
}
