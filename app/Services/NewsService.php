<?php

namespace App\Services;

use App\Repositories\NewsRepository;
use App\Services\Interfaces\NewsServiceInterface;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

/**
 * Class UserService
 * @package App\Services
 */
class NewsService implements NewsServiceInterface
{
  protected $newsRepository;

  public function __construct(NewsRepository $newsRepository)
  {
    $this->newsRepository = $newsRepository;
  }

  public function featuredNews()
  {
    $news = $this->newsRepository->getFeaturedNews();
    return $news;
  }
  public function allNews()
  {
    $news = $this->newsRepository->getAll();
    return $news;

  }
  public function findNewsById($id)
  {
    $news = $this->newsRepository->findById($id);
    return $news;
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
