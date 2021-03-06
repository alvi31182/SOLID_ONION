<?php
declare(strict_types=1);

namespace App\Domain\Repository;


interface RepositoryInteface
{
    public function getById($id);

    public function getAll();

    public function persist($entity);

    public function commit();
}