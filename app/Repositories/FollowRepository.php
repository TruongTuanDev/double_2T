<?php

namespace App\Repositories;

use App\Models\Follow;
use App\Models\Student;
use App\Repositories\Interfaces\FollowRepositoryInterface;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserService
 * @package App\Services
 */
class FollowRepository extends BaseRepository implements FollowRepositoryInterface
{
  protected $model;
  public function __construct(Follow $model){
    $this->model = $model;
  }
  public function getFollowByIdEmpl($id_emp)
  {
    return Follow::where('employer_id_emp',$id_emp)->get();
  }
 
}
