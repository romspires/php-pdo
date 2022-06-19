<?php

use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new \Alura\Pdo\Domain\Model\Student(
    null,
    'Gael Santos Pires',
    new DateTimeImmutable('2021-02-17')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date',$student->birthDate()->format('Y-m-d'));

if($statement->execute()){
    echo "Aluno incluído" . PHP_EOL;
}

