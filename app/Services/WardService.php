<?php

namespace App\Services;

use App\Repositories\WardRepository;
use App\Services\Interfaces\WardServiceInterface;

/**
 * Class UserService
 * @package App\Services
 */
class WardService implements WardServiceInterface
{
  protected $wardRepository;

  public function __construct(WardRepository $wardRepository)
  {
    $this->wardRepository = $wardRepository;
  }
  public function allWard()
  {
    // $wards = $this->wardRepository->getAll();
    // return $wards;
  }
  

}
