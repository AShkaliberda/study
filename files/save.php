<?php
if(isset($_POST['edit'])){
$filename = 'file.txt';
$handlie = fopen($filename,'w');
fwrite($handlie, $_POST['edit_title']);
fwrite($handlie, $_POST['edit_text']);
fclose($handlie);

$edit= fopen($filename, 'r');
$content = fread($edit, filesize($filename));
fclose($edit);

echo $content;
}