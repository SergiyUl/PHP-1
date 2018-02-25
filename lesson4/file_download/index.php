<?php

include __DIR__ . '/function.php';

$files = getImages();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загрузка файлов</title>
</head>
<body>
    <h1>
        Загрузка файлов
    </h1>
    <form method="post" action="/lesson4/file_download/addFile.php" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Загрузить файл</button>
    </form>
    <?php
    foreach ($files as $file) {
        if ('.' != $file && '..' != $file) {
            ?> <img src="/lesson4/file_download/files/<?php echo $file; ?>" alt="картинка" width="250" height="250">
            <?php
        }
    }
    ?>
</body>
</html>