<?php

namespace App\Services\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface EmployerServiceInterface
{
  public function paginate();
  public function featuredCompany();

  public function findCompanyByIdJob($id);
  public function findCompanyById($id);
  public function findCompanyByIdUser($id_user);
  public function getRecommentfavouriteCompany($address);

  public function listStudentSendCV($id_emp);
}
