<?php

include __DIR__ . '/function.php';

if (!empty($_POST['record'])) {
    $record = $_POST['record'];
}

$book = getBook();
$book[] = $record;
file_put_contents(__DIR__ . '/guestBook.txt', implode("\n", $book));

header('Location: /lesson4/guest_book/index.php');
die;