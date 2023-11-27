<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface DistrictRepositoryInterface 
{
  public function findById(int $id);
}
