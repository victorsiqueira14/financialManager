<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\FinancialManager\Abstracts\AbstractService;
use App\FinancialManager\Categories\Services\CategoryService;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends AbstractController

{
    protected $requestValidate = CategoryStoreRequest::class;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }
}
