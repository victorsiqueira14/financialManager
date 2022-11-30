<?php

namespace App\FinancialManager\Expenses\Services;

use App\FinancialManager\Abstracts\AbstractService;
use App\FinancialManager\Expenses\Repositories\ExpenseRepository;

class ExpenseService extends AbstractService
{
    public function __construct(ExpenseRepository $repository)
    {
        $this->repository = $repository;
    }
}
