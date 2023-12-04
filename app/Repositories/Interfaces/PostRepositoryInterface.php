<?php

namespace App\Repositories\Interfaces;

/**
 * @package App\Repositories\Interfaces
 */
interface PostRepositoryInterface
{
  public function getAllPaginate($number);

  public function getPostOfCompany($number);

  public function getFeaturedJob();
}
