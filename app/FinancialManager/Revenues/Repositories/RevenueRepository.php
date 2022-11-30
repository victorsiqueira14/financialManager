<?php

namespace App\FinancialManager\Revenues\Repositories;

use App\FinancialManager\Abstracts\AbstractRepository;
use App\FinancialManager\Revenues\Entities\RevenueEntity;

class RevenueRepository extends AbstractRepository
{

    protected $model;

    public function __construct(RevenueEntity $model)
    {
        $this->model = $model;
    }
}
