<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories\Interfaces
 */
interface StudentRepositoryInterface
{
 public function findStudentByIdUser($id);
 public function applyListOfStudent($id_User);
}
