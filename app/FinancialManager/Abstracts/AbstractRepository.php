<?php

namespace App\FinancialManager\Abstracts;

use Illuminate\Database\Eloquent\Model;
use App\FinancialManager\Interfaces\RepositoryInterface;

abstract class AbstractRepository implements RepositoryInterface
{
    protected $model;

    public function getModel(): Model
    {
        return $this->model;
    }

    public function getAll()
    {
        return $this->getModel()->all();
    }

    public function find(int $id)
    {
        return $this->getModel()->find($id);
    }

    public function create($data): Model
    {
        return $this->getModel()->create($data);
    }

    public function update(array $data, int $id)
    {
        return $this->model->find($id)->update($data);
    }

    public function delete(int $id)
    {
        return $this->find($id)->delete();
    }
}
