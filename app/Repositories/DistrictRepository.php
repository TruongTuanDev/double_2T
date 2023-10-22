<?php

namespace App\Repositories;

use App\Models\District;
use App\Repositories\Interfaces\DistrictRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class DistrictRepository implements DistrictRepositoryInterface
{
  public function getAllDistrict()
  {
    District::all();
  }
}
