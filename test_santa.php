<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 18.10.2017
 * Time: 16:59
 */

function isSenderAndRecipientHaveSamePositions($sender, $recipient)
{
    if (count($sender) === count($recipient))
    for ($i = 0; $i < count($sender); $i++)
    {
        if ($sender[$i] === $recipient[$i])
            return true;
    }

    return false;
}

$sender     = ["Misha", "Andrew", "Alex"];
//$recipient  = ["Misha", "Andrew", "Alex"];
$recipient = $sender;

while (isSenderAndRecipientHaveSamePositions($sender, $recipient))
{
    shuffle($sender);
    shuffle($recipient);
    echo "shuffled <br />";
}

var_dump($sender);
echo "<br />";
var_dump($recipient);