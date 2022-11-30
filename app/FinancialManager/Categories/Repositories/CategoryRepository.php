<?php

namespace App\FinancialManager\Categories\Repositories;

use App\FinancialManager\Abstracts\AbstractRepository;
use App\FinancialManager\Categories\Entities\CategoryEntity;

class CategoryRepository extends AbstractRepository
{
    protected $model;

    public function __construct(CategoryEntity $model)
    {
        $this->model = $model;
    }
}
