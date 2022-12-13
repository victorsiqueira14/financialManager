<?php

namespace App\Http\Controllers;

use App\Models\Revenue;
use Illuminate\Http\Request;
use App\Http\Requests\RevenueStoreRequest;
use App\FinancialManager\Revenues\Services\RevenueService;

class RevenueController extends AbstractController
{
    protected $requestValidate = RevenueStoreRequest::class;

    public function __construct(RevenueService $service)
    {
        $this->service = $service;
    }
}
