<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface NewsRepositoryInterface
{
  public function getFeaturedNews();
  public function getNewsByIdEmp($id_emp);

}
