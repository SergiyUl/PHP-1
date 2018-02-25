<?php

include __DIR__ . '/function.php';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>Гостевая книга</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>
                    Гостевая книга
                </h1>
            </div>
        </div>
        <div class="row">
            <?php
            $guestBook = getBook();
            foreach ($guestBook as $record) {
            ?>
            <p>
                <?php echo $record; ?>
            </p>
            <?php
            }
            ?>
        </div>
        <div class="row">
            <form role="form" method="post" action="/lesson4/guest_book/addRecord.php">
                <div class="form-group">
                    <label for="book">Оставьте запись в гостевой книге</label>
                    <textarea class="form-control" rows="5" id="book" name="record"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Оставить запись</button>
            </form>
        </div>
    </div>
</body>
</html>