<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface UserRepositoryInterface
{
  public function getAllPaginate($number);
  
  public function findUserById($id);
  public function findById($id);
}
