<?php

namespace App\Repositories;

use App\Models\Employer;
use App\Repositories\Interfaces\EmployerRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class EmployerRepository implements EmployerRepositoryInterface
{
  public function getAllPaginate($number){
    return Employer::paginate($number);
  }
}
