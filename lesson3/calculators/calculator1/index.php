<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>Калькулятор</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>Калькулятор</h1>
            </div>
        </div>
        <div class="row">
            <form class="form-horizontal" role="form" method="get" action="/lesson3/calculators/calculator1/calc.php">
                <div class="form-group">
                    <label for="inputX" class="col-sm-6 control-label">Введите число X</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="inputX" name="x" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="select" class="col-sm-6 control-label">Выберите действие</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="select">
                            <option value="+">Сложение</option>
                            <option value="-">Вычитание</option>
                            <option value="*">Умножение</option>
                            <option value="/">Деление</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputY" class="col-sm-6 control-label">Введите число Y</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" id="inputY" name="y" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-6 col-sm-6">
                        <button type="submit" class="btn btn-success">Равно</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>