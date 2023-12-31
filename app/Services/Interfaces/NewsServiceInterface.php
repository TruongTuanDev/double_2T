<?php

namespace App\Services\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface NewsServiceInterface
{
  public function featuredNews();
  public function allNews();
  public function findNewsById($id);
  public function findNewsByIdEmp($id_emp);
}
