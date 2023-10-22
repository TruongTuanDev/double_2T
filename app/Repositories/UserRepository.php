<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class UserRepository implements UserRepositoryInterface 
{
  public function getAllPaginate($number){
    return User::paginate($number);
  }
}
