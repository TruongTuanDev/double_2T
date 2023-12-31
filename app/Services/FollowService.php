<?php

namespace App\Services;

use App\Repositories\FollowRepository;
use App\Repositories\StudentRepository;
use App\Services\Interfaces\FollowServiceInterface;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class UserService
 * @package App\Services
 */
class FollowService implements FollowServiceInterface
{
  protected $followRepository;

  public function __construct(FollowRepository $followRepository)
  {
    $this->followRepository = $followRepository;
  }
  public function listFollowers($id_emp)
  {
    $listFollowers = $this->followRepository->getFollowByIdEmpl($id_emp);
    return $listFollowers;
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
