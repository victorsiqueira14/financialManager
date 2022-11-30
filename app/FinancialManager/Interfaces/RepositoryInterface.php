<?php

namespace App\FinancialManager\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function getModel(): Model;

    public function getAll();

    public function find(int $id);

    public function create($data): Model;

    public function update(int $id, array $data);

    public function delete(int $id);
}
