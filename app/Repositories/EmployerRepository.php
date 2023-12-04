<?php

namespace App\Repositories;

use App\Models\Employer;
use App\Repositories\Interfaces\EmployerRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class EmployerRepository extends BaseRepository implements EmployerRepositoryInterface
{
  protected $model;
  public function __construct(Employer $model){
    $this->model = $model;
  }
  public function getAllPaginate($number){
    return Employer::paginate($number);
  }

  public function getFeaturedCompany()
  {
    return Employer::orderBy('scale', 'desc')
    ->take(5)
    ->get();
  }
}
