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
    return Employer::orderBy('staff_number', 'desc')
    ->take(5)
    ->get();
  }
  public function findCompanyByIdJob($id)
  {
    return Employer::findOrFail($id);
  }
  public function findCompanyById($id)
  {
    $company = Employer::with('posts')->find($id);
    return $company;
  }
}
