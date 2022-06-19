<?php
$pathDB = __DIR__ . '/database.sqlite';
$pdo = new PDO('sqlite:' . $pathDB);

echo 'Connected!' . PHP_EOL;

$pdo->exec('create table students (id INTEGER, name VARCHAR, birth_date VARCHAR);');