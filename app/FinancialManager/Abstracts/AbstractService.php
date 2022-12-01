<?php

namespace App\FinancialManager\Abstracts;

use App\FinancialManager\Interfaces\ServiceInterface;

abstract class AbstractService implements ServiceInterface
{
    /**
     * get all services
     *
     * @return void
     */

    public function getAll()
    {
        return $this->getRepository()->getAll();
    }

    /**
     * Find function
     *
     * @param integer $id
     * @return void
     */
    public function find(int $id)
    {
        return $this->getRepository()->find($id);
    }

    /**
     * Save function
     *
     * @param array $params
     * @return void
     */
    public function save(array $params)
    {
        return $this->getRepository()->create($params);
    }

    /**
     * Update function
     *
     * @param $id
     * @param array $data
     * @return void
     */
    public function update($id, array $data)
    {
        return $this->getRepository()->update($id, $data);
    }

    /**
     * Delete function
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id)
    {
        return $this->getRepository()->delete($id);
    }

    /**
     * getRepository function
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Create function
     *
     * @param array $data
     * @return void
     */
    public function create(array $data)
    {
        return $this->getRepository()->create($data);
    }

}
