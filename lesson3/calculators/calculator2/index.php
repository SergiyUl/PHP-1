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
    <title>Улучшеный калькулятор</title>
</head>
<body>
    <h1>Улучшеный калькулятор</h1>
    <form method="get" action="/lesson3/calculators/calculator2/index.php">
        <label for="exampleInputX">Введите число X</label>
        <input type="number" id="exampleInputX" required name="x" value="<?php echo $x; ?>">
        <select name="select" required>
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
        <label for="exampleInputY">Введите число y</label>
        <input type="number" id="exampleInputY" required name="y" value="<?php echo $y; ?>">
    <button type="submit">Равно</button>
    </form>
    <h2> <?php if (isset($result)) {
            echo $x . $select . $y . ' = ' . $result;
        } else {
            echo $error;
        } ?>
    </h2>
</body>
</html>