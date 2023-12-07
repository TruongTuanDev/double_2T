<?php

namespace App\Services;

use App\Repositories\MajorRepository;
use App\Services\Interfaces\MajorServiceInterface;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class UserService
 * @package App\Services
 */
class MajorService implements MajorServiceInterface
{
  protected $majorRepository;

  public function __construct(MajorRepository $majorRepository)
  {
    $this->majorRepository = $majorRepository;
  }

  public function featuredMajor()
  {
    $companys = $this->majorRepository->getFeaturedMajor();
    return $companys;
  }
  public function allMajor()
  {
    $majors = $this->majorRepository->getAll();
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
