<?php

$host = 'sql200.infinityfree.com';
$db = 'if0_35270568_attendees';
$user = 'if0_35270568';
$pass = 'xOGnWTieHK3v';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}
require_once 'crud.php';
$crud = new crud($pdo);
require_once 'user.php';
$users = new user($pdo);
$users->insertUser("admin", "password");
