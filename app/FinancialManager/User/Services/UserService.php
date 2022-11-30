<?php

namespace App\FinancialManager\User\Services;

use App\FinancialManager\Abstracts\AbstractService;
use App\FinancialManager\User\Repositories\UserRepository;

class UserService extends AbstractService
{
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
}
