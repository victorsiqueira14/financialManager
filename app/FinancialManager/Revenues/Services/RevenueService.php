<?php

namespace App\FinancialManager\Revenues\Services;

use App\FinancialManager\Abstracts\AbstractService;
use App\FinancialManager\Revenues\Repositories\RevenueRepository;

class RevenueService extends AbstractService
{
    public function __construct(RevenueRepository $repository)
    {
        $this->repository = $repository;
    }
}
