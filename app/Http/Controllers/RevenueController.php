<?php

namespace App\Http\Controllers;

use App\Models\Revenue;
use Illuminate\Http\Request;
use App\FinancialManager\Revenues\Services\RevenueService;

class RevenueController extends Controller
{
    public function __construct(RevenueService $service)
    {
        $this->service = $service;
    }
}
