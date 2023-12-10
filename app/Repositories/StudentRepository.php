<?php

namespace App\Repositories;

use App\Models\Student;

/**
 * Class UserService
 * @package App\Services
 */
class StudentRepository extends BaseRepository 
{
  protected $model;
  public function __construct(Student $model){
    $this->model = $model;
  }
 
}
