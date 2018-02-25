<?php

include __DIR__ . '/function.php';

$images = getImages($dir);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Картинка</title>
</head>
<body>
    <h1>Картинка</h1>
    <img src="<?php echo '/lesson3/photogallery/images/' . $images[$_GET['id']]; ?>" alt="image" height="560" width="1167">
    <a href="/lesson3/photogallery/index.php">
        Назад
    </a>
</body>
</html>