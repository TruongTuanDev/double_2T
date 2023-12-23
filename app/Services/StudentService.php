<?php

namespace App\Services;

use App\Repositories\StudentRepository;
use App\Services\Interfaces\StudentServiceInterface;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class UserService
 * @package App\Services
 */
class StudentService implements StudentServiceInterface
{
  protected $studentRepository;

  public function __construct(StudentRepository $studentRepository)
  {
    $this->studentRepository = $studentRepository;
  }

  
  public function allStudent()
  {
    $students = $this->studentRepository->getAll();
    return $students;
  }
  public function findStudentById($id)
  {
    $student = $this->studentRepository->findById($id);
    return $student;
  }
  public function findStudentByIdUser($id)
  {
    $student = $this->studentRepository->findStudentByIdUser($id);
    return $student;
  }
  public function applyListOfStudent($id){
    
  }
  public function create($request){
    DB::beginTransaction();
    try{
      $payload = $request->except(['_token', 'send','re_password']);
      $carbonDate = Carbon::createFromFormat('d/m/Y',$payload['birthday']);
      $payload['birthday'] = $carbonDate->format('Y-m-d H:i:s');
      dd($payload);
      DB::commit();
      return true;
    }catch(Exception $e){
      DB::rollBack();
      echo $e->getMessage();
      return false;
    };
  }

}
