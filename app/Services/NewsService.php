<?php

namespace App\Services;

use App\Models\News;
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
  public function findNewsByIdEmp($id_emp)
  {
    $news = $this->newsRepository->getNewsByIdEmp($id_emp);
    return $news; 
  }
  public function findNewsBySlug($slug){
    $news = News::where('slug',$slug)->first();
    return $news; 
  }

}
