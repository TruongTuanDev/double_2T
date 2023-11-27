<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface ProvinceRepositoryInterface
{
  public function getAll();
  public function findById(int $id);
}
