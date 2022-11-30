<?php

namespace App\FinancialManager\Interfaces;

interface ServiceInterface
{
    public function getAll();

    public function find(int $id);

    public function save(array $params);

    public function update($id, array $data);

    public function delete(int $id);

    public function getRepository();

    public function create(array $data);
}
