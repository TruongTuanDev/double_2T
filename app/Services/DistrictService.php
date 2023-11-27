<?php

namespace App\Services;

use App\Repositories\DistrictRepository;
use App\Services\Interfaces\DistrictServiceInterface;

/**
 * Class UserService
 * @package App\Services
 */
class DistrictService implements DistrictServiceInterface
{
  protected $districtRepository;

  public function __construct(DistrictRepository $districtRepository)
  {
    $this->districtRepository = $districtRepository;
  }
 
}
