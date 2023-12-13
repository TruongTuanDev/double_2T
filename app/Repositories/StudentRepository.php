<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\Interfaces\StudentRepositoryInterface;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserService
 * @package App\Services
 */
class StudentRepository extends BaseRepository implements StudentRepositoryInterface
{
  protected $model;
  public function __construct(Student $model){
    $this->model = $model;
  }
 public function findStudentByIdUser($student)
 {
  $id_user = Auth()->id();
  $student = Student::where('id_user', $id_user)->first();
  return $student;
 }
}
