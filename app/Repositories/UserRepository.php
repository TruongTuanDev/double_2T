<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface 
{
  protected $model;
  public function __construct(Admin $model){
    $this->model = $model;
  }
  public function getAllPaginate($number){
    return Admin::paginate($number);
  }

  public function findUserById($id)
  {
  {
    $admin = User::with('admins')->find($id);
    return $admin;
  }
}
    
}
