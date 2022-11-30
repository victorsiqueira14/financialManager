<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\FinancialManager\Abstracts\AbstractService;
use App\FinancialManager\Categories\Services\CategoryService;

class CategoryController extends AbstractService
{
    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }
}
