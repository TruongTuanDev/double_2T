<?php

namespace App\Services\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface UserServiceInterface
{
  public function paginate();
  public function findById($id);
  public function findUserById($id);
}
