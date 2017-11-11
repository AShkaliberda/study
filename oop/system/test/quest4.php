<?php
session_start();
$answer3 = trim(htmlspecialchars($_POST['answer3']));
$answer3 = strtolower($answer3);
if($answer3 === 'hypertext preprocessor' || $answer3 === 'pre hypertext processor' || $answer3 === 'препроцесор гіпертексту'){
    $_SESSION['count'] += 10;
}
$_SESSION['answer3'] = $answer3;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Онлайн-тестування з основ PHP</title>

    <!-- Bootstrap core CSS -->
<<<<<<< Updated upstream
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/styles.css" rel="stylesheet">
=======
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
>>>>>>> Stashed changes

</head>

<body>
<div class="wrapper">

    <h3>Якої версії PHP не існує в природі</h3>

    <form class="form-horizontal" method="POST" action="results.php">
        <div class="form-group">
        <select name="answer4" class="form-control">
            <option value="3">3</option>
            <option value="6">6</option>
            <option value="7">7</option>
        </select>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="submit">Завершити</button>
            </div>
        </div>
    </form>
</div>