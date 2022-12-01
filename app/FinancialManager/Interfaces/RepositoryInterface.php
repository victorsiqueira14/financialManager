<?php

namespace App\FinancialManager\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function getModel(): Model;

    public function getAll();

    public function find(int $id);

    public function create($data): Model;

    public function update(array $data, int $id);

    public function delete(int $id);
}
