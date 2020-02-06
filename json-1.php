<?php
include 'config.php';
include 'class.Monsters.php';
header('Content-Type: application/json');
$monsters = new Monsters();
$list=$monsters->get_Monsters();
echo "{\"Monsters\":";
echo json_encode($list);
echo "}";
?>
