<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface EmployerRepositoryInterface
{
  public function getAllPaginate($number);
  public function getFeaturedCompany();

  public function findCompanyByIdJob($id);
  public function findCompanyById($id);
  public function findCompanyByIdUser($id_user);
  public function getRecommentFavouriteCompany($address);

  public function getStudentSendCV($id_emp);
}
