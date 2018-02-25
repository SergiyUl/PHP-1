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
    <title>Результат</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>Результат</h1>
            </div>
        </div>
        <div class="row">
           <h2>
               <?php if ($result) {
                   echo $x . $select . $y . ' = ' . $result;
               } else {
                   echo $error;
               } ?>
           </h2>
        </div>
        <div class="row">
            <a href="/lesson3/calculators/calculator1/index.php" class="btn btn-success">
                назад
            </a>
        </div>
    </div>
</body>
</html>