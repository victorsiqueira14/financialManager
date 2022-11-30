<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use App\FinancialManager\Expenses\Services\ExpenseService;

class ExpenseController extends AbstractController
{
    public function __construct(ExpenseService $service)
    {
        $this->service = $service;
    }
}
