<?php

namespace App\FinancialManager\Categories\Services;

use App\FinancialManager\Abstracts\AbstractService;
use App\FinancialManager\Categories\Repositories\CategoryRepository;

class CategoryService extends AbstractService
{
    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }
}
