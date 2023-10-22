<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\Interfaces\UserServiceInterface;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
  protected $userRepository;

  public function __construct(UserRepository $userRepository)
  {
    $this->userRepository = $userRepository;
  }
  public function paginate(){
    $users = $this->userRepository->getAllPaginate(15);
    return $users;
  }

}
