<?php

namespace App\Repositories;

use App\Models\Favjob;
use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserService
 * @package App\Services
 */
class PostRepository extends BaseRepository implements PostRepositoryInterface
{
  protected $model;
  public function __construct(Post $model){
    $this->model = $model;
  }
  public function getAllPaginate($number){
    return Post::orderBy('id_post', 'desc')->paginate($number);
  }
  public function getPostOfCompany($number)
  {
    $idEmp = Auth()->id();
    $posts = Post::orderBy('id_post', 'desc')->where('id_emp', $idEmp)->paginate($number);
    return $posts;
  }
  public function getFavouriteJob($id)
  {
    $id = Auth()->id();
    $favouriteJob = Favjob::find($id);
    return $favouriteJob;
  }

  public function getFeaturedJob()
  {
    return Post::orderBy('salary', 'desc')
    ->take(9)
    ->get();
  }
  public function findJobById($id)
  {
    $job = Post::with('companys')->find($id);
    return $job;
  }
}
