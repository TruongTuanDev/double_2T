<?php

namespace App\Services;

use App\Repositories\DistrictRepository;
use App\Services\Interfaces\ProvinceServiceInterface;

/**
 * Class UserService
 * @package App\Services
 */
class ProvinceService implements ProvinceServiceInterface
{
  protected $districtRepository;

  public function __construct(DistrictRepository $provinceRepository)
  {
    $this->provinceRepository = $provinceRepository;
  }
  public function allProvince()
  {
    $provinces = $this->provinceRepository->getAllProvince();
    return $provinces;
  }
  

}
