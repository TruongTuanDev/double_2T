<?php

namespace App\Repositories;

use App\Models\News;
use App\Repositories\Interfaces\NewsRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class NewsRepository extends BaseRepository implements NewsRepositoryInterface
{
  protected $model;
  public function __construct(News $model){
    $this->model = $model;
  }
  public function getFeaturedNews()
  {
    return News::where('status','active')->orderBy('create_date','desc')->get();
  }
}
