<?php
include 'config.php';
include 'class.Books.php';

header('Content-Type: application/json');

$books = new Books();
$list=$books->get_Books();

echo "{\"Books\":";
echo json_encode($list);
echo "}";
?>
