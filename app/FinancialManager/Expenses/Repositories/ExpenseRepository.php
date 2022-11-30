<?php

namespace App\FinancialManager\Expenses\Repositories;

use App\FinancialManager\Abstracts\AbstractRepository;
use App\FinancialManager\Expenses\Entities\ExpenseEntity;

class ExpenseRepository extends AbstractRepository
{
    protected $model;

    public function __construct(ExpenseEntity $model)
    {
        $this->model = $model;
    }
}
