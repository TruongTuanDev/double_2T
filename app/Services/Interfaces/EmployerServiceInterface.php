<?php

namespace App\Services\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface EmployerServiceInterface
{
  public function paginate();
  public function featuredCompany();
}
