<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

if (isset($_POST['description'])) {
    $description = $_POST['description'];
} else {
    $description = null;
}

if (isset($_POST['text'])) {
    $text = $_POST['text'];
} else {
    $text = null;
}

$pdo  = new PDO("mysql:dbname=mybase;host=localhost", "develop", "develop");
$date = new \DateTime();
$stm  = $pdo->prepare("INSERT INTO note SET description =:description, text=:text, created_at =:created");
$stm->execute([
    'description' => $description,
    'text'        => $text,
    'created'     => $date->format('Y-m-d H:i:s'),
]);