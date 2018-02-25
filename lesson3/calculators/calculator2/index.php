<?php

if ((isset($_GET['x'])) && (isset($_GET['select'])) && (isset($_GET['y']))) {
    $x = $_GET['x'];
    $select = $_GET['select'];
    $y = $_GET['y'];
}

switch ($select) {
    case '+':
        $result = $x + $y;
        break;
    case '-':
        $result = $x - $y;
        break;
    case '*':
        $result = $x * $y;
        break;
    case '/':
        if (0 != $y) {
            $result = $x / $y;
        } else {
            $error = 'На 0 делить нельзя!';
        }
        break;
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>Улучшеный калькулятор</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="page-header">
            <h1>Улучшеный калькулятор</h1>
        </div>
    </div>
    <div class="row">
        <form class="form-inline" role="form" method="get" action="/lesson3/calculators/calculator2/index.php">
            <div class="form-group">
                <label class="sr-only" for="exampleInputX">X</label>
                <input type="number" class="form-control" id="exampleInputX" placeholder="Введите число X" required name="x" value="<?php echo $x; ?>">
            </div>
            <div class="form-group">
                <label for="select" class="sr-only">Выберите действие</label>
                    <select class="form-control" name="select" required>
                        <option>Выберите действие</option>
                        <?php
                        $operators = ['Сложение' => '+', 'Вычитание' => '-', 'Умножение' => '*', 'Деление' => '/',];
                        foreach ($operators as $key => $operator) {
                        ?> <option <?php if ($select == $operator) {
                            ?> selected <?php
                            } ?>value="<?php echo $operator; ?>"><?php echo $key; ?></option>
                        <?php
                        }
                        ?>
                    </select>
            </div>
            <div class="form-group">
                <label class="sr-only" for="exampleInputY">Y</label>
                <input type="number" class="form-control" id="exampleInputY" placeholder="Введите число Y" required name="y" value="<?php echo $y; ?>">
            </div>
            <button type="submit" class="btn btn-success">Равно</button>
        </form>
    </div>
    <div class="row">
        <h2> <?php if ($result) {
                echo $x . $select . $y . ' = ' . $result;
            } else {
                echo $error;
            } ?>
        </h2>
    </div>
</div>
</body>
</html>