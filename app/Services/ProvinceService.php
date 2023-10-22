<?php

namespace App\Services;

use App\Repositories\ProvinceRepository;
use App\Services\Interfaces\ProvinceServiceInterface;

/**
 * Class UserService
 * @package App\Services
 */
class ProvinceService implements ProvinceServiceInterface
{
  protected $provinceRepository;

  public function __construct(ProvinceRepository $provinceRepository)
  {
    $this->provinceRepository = $provinceRepository;
  }
  public function allProvince()
  {
    $provinces = $this->provinceRepository->getAllProvince();
    return $provinces;
  }
  

}
