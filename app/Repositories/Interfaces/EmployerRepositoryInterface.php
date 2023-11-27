<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface EmployerRepositoryInterface
{
  public function getAllPaginate($number);
}
