<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FinancialManager\User\Services\UserService;


class UserController extends AbstractController
{
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }
}
