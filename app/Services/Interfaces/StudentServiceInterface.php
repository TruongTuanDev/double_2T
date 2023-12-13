<?php

namespace App\Services\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface StudentServiceInterface
{
  public function allStudent();
  public function findStudentById($id);
  public function findStudentByIdUser($id);
}
