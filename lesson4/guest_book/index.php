<?php

include __DIR__ . '/function.php';

$guestBook = getBook();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>
    <h1>
        Гостевая книга
    </h1>
    <?php
    foreach ($guestBook as $record) {
    ?>
    <p>
        <?php echo $record; ?>
    </p>
    <?php
    }
    ?>
    <form method="post" action="/lesson4/guest_book/addRecord.php">
            <label for="book">Оставьте запись в гостевой книге</label>
            <textarea rows="5" id="book" name="record"></textarea>
        <button type="submit" class="btn btn-success">Оставить запись</button>
    </form>
</body>
</html>