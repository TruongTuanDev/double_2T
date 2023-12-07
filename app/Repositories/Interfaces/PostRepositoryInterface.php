<?php

namespace App\Repositories\Interfaces;

/**
 * @package App\Repositories\Interfaces
 */
interface PostRepositoryInterface
{
  public function getAllPaginate($number);

  public function getPostOfCompany($number);

  public function getPostOfCompanyBy2($id);

  public function getFeaturedJob();

  public function findJobById($id);
}
