<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'):

    require_once('functions.php');
    $db = db_connect();

    if(validation($db)):
        session_start();
        $_SESSION['name'] = 'admin';
        include('views/admin_page.php');
    else:
        header('Location:authorization.php');
    endif;
else:
echo "Ви не маєте прав для перегляду цієї сторінки";
endif;

?>