<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>Таблицы истинности</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <caption>
                    таблица истинности для оператора &&
                </caption>
                <tr>
                    <th>
                        &&
                    </th>
                    <th>
                        true
                    </th>
                    <th>
                        false
                    </th>
                </tr>
                <tr>
                    <th>
                        true
                    </th>
                    <td>
                        <?php echo (int)(true && true); ?>
                    </td>
                    <td>
                        <?php echo (int)(true && false); ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        false
                    </th>
                    <td>
                        <?php echo (int)(false && true); ?>
                    </td>
                    <td>
                        <?php echo (int)(false && false); ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <caption>
                    таблица истинности для оператора ||
                </caption>
                <tr>
                    <th>
                        ||
                    </th>
                    <th>
                        true
                    </th>
                    <th>
                        false
                    </th>
                </tr>
                <tr>
                    <th>
                        true
                    </th>
                    <td>
                        <?php echo (int)(true || true); ?>
                    </td>
                    <td>
                        <?php echo (int)(true || false); ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        false
                    </th>
                    <td>
                        <?php echo (int)(false || true); ?>
                    </td>
                    <td>
                        <?php echo (int)(false || false); ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <caption>
                    таблица истинности для оператора xor
                </caption>
                <tr>
                    <th>
                        xor
                    </th>
                    <th>
                        true
                    </th>
                    <th>
                        false
                    </th>
                </tr>
                <tr>
                    <th>
                        true
                    </th>
                    <td>
                        <?php echo (int)(true xor true); ?>
                    </td>
                    <td>
                        <?php echo (int)(true xor false); ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        false
                    </th>
                    <td>
                        <?php echo (int)(false xor true); ?>
                    </td>
                    <td>
                        <?php echo (int)(false xor false); ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>