<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface 
{
  protected $model;
  public function __construct(User $model){
    $this->model = $model;
  }
  public function getAllPaginate($number){
    return User::paginate($number);
  }
}
