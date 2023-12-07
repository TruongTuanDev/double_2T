<?php

namespace App\Services;

use App\Repositories\EmployerRepository;
use App\Services\Interfaces\EmployerServiceInterface;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class UserService
 * @package App\Services
 */
class EmployerService implements EmployerServiceInterface
{
  protected $employerRepository;

  public function __construct(EmployerRepository $employerRepository)
  {
    $this->employerRepository = $employerRepository;
  }
  public function getAllCompany()
  {
    $employers = $this->employerRepository->getAll();
    return $employers;
  }
  public function featuredCompany()
  {
    $companys = $this->employerRepository->getFeaturedCompany();
    return $companys;
  }
  public function paginate(){
    $employers = $this->employerRepository->getAllPaginate(15);
    return $employers;
  }
  public function findCompanyByIdJob($id)
  {
    $companys = $this->employerRepository->findCompanyByIdJob($id);
    return $companys;
  }
  public function findCompanyById($id)
  {
    $companys = $this->employerRepository->findCompanyById($id);
    return $companys;
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
