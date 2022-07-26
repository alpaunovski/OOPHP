<?php

require "App/Models/User.php";
require_once 'vendor/autoload.php';

use \App\Models\User;

$host="127.0.0.1";
$dbname="pdo_demo";
$charset="utf8mb4";
$dsn="mysql:host=$host;dbname=$dbname;charset=$charset";
$options=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user='root', $password='', $options);
} catch (PDOException $PDOException) {
    throw new PDOException($PDOException->getMessage(), (int) $PDOException->getCode()) ;
}

// $stmt = $pdo->query('SELECT name FROM users');
// while ($row = $stmt->fetch() ){
//     echo $row['name'] . "\n";
// }

$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email AND name = :name');
$email='gary@clarke.com';
$name='Gary Clarke';
$stmt->execute(['email' => $email, 'name' => $name]);
$user = $stmt->fetch();

// dd($user);

$stmt = $pdo->prepare('INSERT INTO users (name, email) VALUES (:name, :email) ');
$name = "Jane Doe";
$email = "janedoe@example.com";
// $stmt->execute(['name' => $name, 'email' => $email]);
// $inserted = $stmt->rowCount();

// dd($inserted);

// $sql = 'UPDATE users SET email = :email WHERE id = :id';
// $pdo->prepare($sql)->execute(['email' => 'jdoe1@example.net', 'id' => 1]);

// $stmt = $pdo->query('SELECT name FROM users');

// foreach ($stmt as $row){
//     echo $row['name'] . "\n";
// }

// $stmt = $pdo->prepare('SELECT name FROM users WHERE id = :id');
// $stmt->execute(['id' => 2]);
// $user = $stmt->fetchColumn();
// dd($user);

$users = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_CLASS, User::class);
dd($users);