<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/lesson2/task-2/style.css">
    <title>Главная</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <form class="form-inline" role="form" method="post" action="/lesson2/task-2/calculator.php">
                <div class="form-group col-xs-3">
                    <label class="sr-only" for="a">коэффициент а</label>
                    <input type="number" class="form-control" id="a" name="a" placeholder="введите коэффициент a">
                </div>
                <div class="form-group col-xs-3">
                    <label class="sr-only" for="b">коэффициент в</label>
                    <input type="number" class="form-control" id="b" name="b" placeholder="введите коэффициент b">
                </div>
                <div class="form-group col-xs-3">
                    <label class="sr-only" for="c">коэффициент с</label>
                    <input type="number" class="form-control" id="c" name="c" placeholder="введите коэффициент c">
                </div>
                <button type="submit" class="btn btn-success col-xs-3">решить квадратное уравнение</button>
            </form>
        </div>
    </div>
</body>
</html>