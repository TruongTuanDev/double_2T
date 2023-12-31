<?php

namespace App\Services\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface FollowServiceInterface
{
  public function listFollowers($id_emp);
}
