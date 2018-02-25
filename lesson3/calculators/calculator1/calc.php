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
    <title>Результат</title>
</head>
<body>
    <h1>Результат</h1>
    <h2>
       <?php if (isset($result)) {
           echo $x . $select . $y . ' = ' . $result;
       } else {
           echo $error;
       } ?>
    </h2>
    <a href="/lesson3/calculators/calculator1/index.php">
        назад
    </a>
</body>
</html>