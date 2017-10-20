<?php
$title = $_COOKIE['name'];
$content = $_COOKIE['content'];
?>

<form class="form-horizontal" action="save.php" method="post" role="form">
<div class="form-group">
    <label class="control-label col-sm-2" for="title">Filename:</label>
    <div class="col-sm-10">
        <input name="edit_title" type="text" class="form-control" id="title" value="<?=$title; ?>">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-2" for="text">Text:</label>
    <div class="col-sm-10">
        <input name="edit_text" id="text" type="text" value="<?=$content; ?>">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="edit" class="btn btn-primary">Зберегти</button>
    </div>
</div>
</form>