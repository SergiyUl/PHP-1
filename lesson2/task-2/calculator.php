<?php

include __DIR__.'/function.php';

if ((!empty($_POST['a'])) && (!empty($_POST['b'])) && (!empty($_POST['c']))) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
}
$d = discriminant($a, $b, $c);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lesson2/task-2/style.css">
    <title>решение уравнения</title>
</head>
<body>
    <div class="container">
        <div class="row col-xs-12">
           <?php
           if ($d > 0) {
               $x1 = (-$b + sqrt($d)) / (2 * $a);
               $x2 = (-$b - sqrt($d)) / (2 * $a);
               ?>
               <h1>
                   Первый корень =  <?php echo $x1; ?>
                   <br>
                   Второй корень = <?php echo $x2; ?>
               </h1>
               <?php
           } elseif ($d == 0) {
               $x = -$b/(2 * $a);
               ?>
               <h1>
                   Корень = <?php echo $x; ?>
               </h1>
               <?php
           } elseif ($d < 0) {
               ?>
               <h1>
                   Данное уравнение не имеет корней!
               </h1>
               <?php
           }
           ?>
        </div>
        <div class="row col-xs-12">
            <a href="/lesson2/task-2/index.php" class="btn btn-success">
                Решить другое уравнение
            </a>
        </div>
    </div>
</body>
</html>