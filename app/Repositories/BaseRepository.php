<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
/**
 */
class BaseRepository implements BaseRepositoryInterface
{
  protected $model;
  public function __construct(Model $model){
    $this->model = $model;
  }
  public function getAll(){
    return $this->model->all();
  }
  public function findById($id)
  {
    $model=$this->model::find($id);
    return $model;
  }
}
