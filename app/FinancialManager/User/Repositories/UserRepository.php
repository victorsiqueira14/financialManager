<?php

namespace App\FinancialManager\User\Repositories;

use App\FinancialManager\User\Entities\UserEntity;
use App\FinancialManager\Abstracts\AbstractRepository;

class UserRepository extends AbstractRepository
{
    protected $model;

    public function __contruct(UserEntity $model)
    {
        $this->model = $model;
    }
}
