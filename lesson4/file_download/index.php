<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <title>Загрузка файлов</title>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>
                Загрузка файлов
            </h1>
        </div>
        <div class="row">
            <form method="post" action="/lesson4/file_download/addFile.php" enctype="multipart/form-data" class="form-inline">
                <input type="file" name="file" class="form-control">
                <button type="submit" class="btn btn-success">Загрузить файл</button>
            </form>
        </div>
    </div>
</body>
</html>