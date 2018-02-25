<?php

if ($_FILES['file']) {
    if (0 == $_FILES['file']['error']) {
        move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . '/files/' . $_FILES['file']['name']);
    }
}

header('Location: /lesson4/file_download/index.php');
die;