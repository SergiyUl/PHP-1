<?php

include __DIR__ . '/function.php';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>Фотогалерея</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>Фотогалерея</h1>
            </div>
        </div>
        <div class="row">
        <?php
        foreach ($images as $id => $image) {
            ?>
            <a href="/lesson3/photogallery/image.php?id=<?php echo $id; ?>">
                <img src="/lesson3/photogallery/images/<?php echo $image; ?>" alt="image" width="280" height="280" class="img-rounded">
            </a>
            <?php
        }
        ?>
        </div>
    </div>
</body>
</html>