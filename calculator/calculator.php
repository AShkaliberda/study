<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Калькулятор</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/styles.css" rel="stylesheet">

</head>

<body>

<div class="wrapper">
    <h3>Калькулятор</h3>

    <form class="form-horizontal" action="calc.php" method="post" role="form">
        <div class="form-group">
            <div class="col-sm-10">
                <input name="result" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="num1">Введіть число:</label>
            <div class="col-sm-10">
                <input name="num1" type="number" class="form-control" id="num1" placeholder="Введіть число:" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="operation">Виберіть операцію</label>
            <div class="col-sm-10">
                <input type="radio" name="operation" value="divide"checked> Поділити
                <input type="radio" name="operation" value="multiply"> Помножити
                <input type="radio" name="operation" value="sum"> Додати
                <input type="radio" name="operation" value="substract"> Відняти

            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="num2">Введіть число:</label>
            <div class="col-sm-10">
                <input name="num2" type="number" class="form-control" id="num2" placeholder="Введіть число:" required>
            </div>
        </div>
        <div class="form-group">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Порахувати</button>
                </div>
            </div>
        </form>
    </div>
</body>