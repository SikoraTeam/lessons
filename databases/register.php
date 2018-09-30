<?php
/**
 * Created by PhpStorm.
 * User: phpmasterblaster
 * Date: 30.09.18
 * Time: 16:24
 */

//if (isset ($_POST['name'])) {
//    $name = $_POST ['name'];
//} else {
//    $name = null;
//}
//
//if (isset($_POST ['email'])) {
//    $email = $_POST['email'];
//
//} else {
//    $email = null;
//}
//
//if (isset($_POST ['password'])) {
//    $password = md5($_POST['password']);
//} else {
//    $password = null;
//}

$name     = isset($_POST['name']) ? $_POST['name'] : null;
$email    = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

$pdo  = new PDO("mysql:dbname=mybase;host=localhost", "develop", "develop");
$date = new \DateTime();
$stm  = $pdo->prepare("INSERT INTO user SET name =:name,email =:email, pass =:password, reg_date =:created");
$stm->execute([
    'name'     => $name,
    'email'    => $email,
    'password' => $password,
    'created'  => $date->format('Y-m-d H:i:s'),
]);
