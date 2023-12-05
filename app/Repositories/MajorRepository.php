<?php

namespace App\Repositories;

use App\Models\Major;
use App\Repositories\Interfaces\MajorRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class MajorRepository extends BaseRepository implements MajorRepositoryInterface
{
  protected $model;
  public function __construct(Major $model){
    $this->model = $model;
  }
  public function getFeaturedMajor()
  {
    return Major::orderBy('traffic_volume', 'desc')
    ->get();
  }
}
