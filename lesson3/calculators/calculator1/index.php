<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
    <h1>Калькулятор</h1>
    <form method="get" action="/lesson3/calculators/calculator1/calc.php">
        <label for="inputX" >Введите число X</label>
            <input type="number" id="inputX" name="x" required>
        <label for="select" >Выберите действие</label>
            <select name="select">
                <option value="+">Сложение</option>
                <option value="-">Вычитание</option>
                <option value="*">Умножение</option>
                <option value="/">Деление</option>
            </select>
        <label for="inputY" >Введите число Y</label>
            <input type="number" id="inputY" name="y" required>
            <button type="submit">Равно</button>
    </form>
</body>
</html>