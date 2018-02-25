<?php

include __DIR__ . '/function.php';

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>Картинка</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1>Картинка</h1>
            </div>
        </div>
        <div class="row">
            <img src="<?php echo '/lesson3/photogallery/images/' . $images[$_GET['id']]; ?>"
                 alt="image" height="560" width="1167" class="img-rounded">
        </div>
        <div class="row">
            <a href="/lesson3/photogallery/index.php" class="btn btn-success col-sm-12">
                Назад
            </a>
        </div>
    </div>
</body>
</html>