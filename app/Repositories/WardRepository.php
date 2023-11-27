<?php

namespace App\Repositories;

use App\Models\Ward;
use App\Repositories\Interfaces\WardRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class WardRepository implements WardRepositoryInterface
{
  protected $model;
  public function __construct(Ward $model){
    $this->model = $model;
  }
}
