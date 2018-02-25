<?php

include __DIR__ . '/function.php';

$images = getImages();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загрузка изображений</title>
</head>
<body>
    <h1>
        Загрузка изображений
    </h1>
    <form method="post" action="/lesson4/image_download/addImage.php" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit">Загрузить изображение</button>
    </form>
    <?php
    foreach ($images as $image) {
    if ('.' != $image && '..' != $image) {
    ?> <img src="/lesson4image_download/images/<?php echo $image; ?>" alt="картинка" width="250" height="250">
    <?php
        }
    }
    ?>
</body>
</html>