<?php

namespace Alura\Pdo\Infraestructure\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infraestructure\Persistence\ConnectionCreator;

class PdoStudentRepository implements StudentRepository
{
    private \PDO $connection;

    public function __construct()
    {
        $this->connection = ConnectionCreator::createConnection();
    }

    public function allStudents(): array
    {
        // TODO: Implement allStudents() method.
    }

    public function studentsBirthAt(\DateTimeInterface $birthDate): array
    {
        // TODO: Implement studentsBirthAt() method.
    }

    public function save(Student $student): bool
    {
        // TODO: Implement save() method.
    }

    public function remove(Student $student): bool
    {
        // TODO: Implement remove() method.
    }
}