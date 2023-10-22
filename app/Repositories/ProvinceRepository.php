<?php

namespace App\Repositories;

use App\Models\Province;
use App\Repositories\Interfaces\ProvinceRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class ProvinceRepository implements ProvinceRepositoryInterface
{
  public function getAllProvince(){
    return Province::all();
  }
}
