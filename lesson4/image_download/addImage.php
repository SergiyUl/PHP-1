<?php

$extensions = ['jpg', 'jpeg', 'png'];
$errors = ['Ошибка загрузки!', 'Не допустимое расширение!'];

if (!empty($_FILES)) {
    if (isset($_FILES['image'])) {
        if (0 == $_FILES['image']['error']) {
            $file_ex = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            if (in_array(strtolower($file_ex), $extensions)) {
                move_uploaded_file(
                    $_FILES['image']['tmp_name'],
                    __DIR__ . '/images/' . $_FILES['image']['name']
                );
            } else {
                echo $errors[1];
                die;
            }
        } else {
            echo $errors[0];
            die;
        }
    }
}
header('Location: /lesson4/image_download/index.php');