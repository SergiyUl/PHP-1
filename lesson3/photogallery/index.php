<?php

include __DIR__ . '/function.php';

$images = getImages($dir);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Фотогалерея</title>
</head>
<body>
    <h1>Фотогалерея</h1>
    <?php
    foreach ($images as $id => $image) {
        ?>
        <a href="/lesson3/photogallery/image.php?id=<?php echo $id; ?>">
            <img src="/lesson3/photogallery/images/<?php echo $image; ?>" alt="image" width="280" height="280">
        </a>
        <?php
    }
    ?>
</body>
</html>