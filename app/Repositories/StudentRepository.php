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
 public function findStudentByIdUser($id)
 {
  $student = Student::where('id_user', $id)->first();
  return $student;
 }
 public function applyListOfStudent($id_Student)
 {
  $student = Student::find($id_Student);
  $appliedJobs = $student->jobs;
  return $appliedJobs;
 }
}
