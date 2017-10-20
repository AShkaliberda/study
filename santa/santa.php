<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 14.10.2017
 * Time: 14:54
 */

ini_set('locale', 'UTF-8');
ini_set('SMTP', 'localhost');
ini_set('smtp_port', '25');
ini_set('sendmail_from', 'me@example.com');

require_once('functions.php');

session_start();
$data = trim(htmlspecialchars($_POST['adress']));
$user = explode(" ", $data);
$email = $user[0];
$name = $user[1]. ' '. $user[2]. ' '.$user[3];

    if (!empty($_SESSION['users'])):
        if(!in_array($name, $_SESSION['users'])):
            $recipient = end($_SESSION['users']);
            createFile($name, $recipient);
            addInfo($name, $email);

                if($_POST['send'] === 'mail') :
                    $last_item = end($_SESSION['users']);
                    $first_item = $_SESSION['users'][0];
                    createFile($first_item, $last_item);
                    $base = array_combine($_SESSION['users'], $_SESSION['emails']);

                    foreach($base as $sender => $mail) :
                        $subject = 'Notification';
                        $message = addMessage($sender);
                            if(mail($mail, $subject, $message)) :
                                unlink($sender.'.txt');
                            endif;
                    endforeach;

                    echo "Всі листи відправлені!";
                    session_destroy();
                    echo "<br />";
                    echo "<a href ='index.php'>Назад</a>";
                    exit;
                endif;
            echo "Ваш подарунок сформований";
            echo "<br />";
            echo "<a href ='index.php'>Назад</a>";
        else:
            echo "Користувач з таким іменем вже є";
            echo "<br />";
            echo "<a href ='index.php'>Назад</a>";
        endif;
    else :
        addInfo($name, $email);
        echo "Вас додали в базу привітань";
        echo "<br />";
        echo "<a href='index.php'>Назад</a>";
        exit;
    endif;




