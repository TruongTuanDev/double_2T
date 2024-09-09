<?php

namespace App\Repositories;

use App\Models\Employer;
use App\Models\Favjob;
use App\Models\HistorySearch;
use App\Models\Post;
use App\Models\Student;
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
    $emp=Employer::where('id_user',Auth()->id())->first();
    $posts = Post::orderBy('id_post', 'desc')->where('id_emp', $emp->id_emp)->paginate($number);
    return $posts;
  }
  public function getFavouriteJob($idStudent)
  {
    $student = Student::find($idStudent);
    $appliedJobs = $student->favoritePosts;
    return $appliedJobs;
  }

  public function getFeaturedJob()
  {
    return Post::orderBy('salary', 'desc')
    ->take(9)
    ->get();
  }
  public function getFeaturedJobOrderByDate(){
    return Post::orderBy('post_date', 'desc')
    ->get();
  }
  public function findJobById($id)
  {
    $job = Post::with('companys')->find($id);
    return $job;
  }
  public function findJobByIdemp($id_emp)
  {
    $job = Post::where('id_emp',$id_emp)->get();
    return $job;
  }
  public function findJobByIdempListHandel($id_emp){
    $jobs = Post::where('id_emp',$id_emp)->orderBy('salary','desc')->get();  
    return $jobs;
  }
  public function getRecommentFavouriteJob($id_major,$address){
    $job = Post::where('id_major',$id_major)->orwhere('address',$address)->get();
    return $job;
  }
  public function getJobBySearch($province_id, $searchTerm)
  {
    $jobs = Post::where('province_id', $province_id)
    ->where(function ($query) use ($searchTerm) {
        $query->where('title', 'like', '%'.$searchTerm.'%') 
            ->orWhereHas('major', function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%'.$searchTerm.'%');
            })
            ->orWhereHas('companys', function ($query) use ($searchTerm) {
                $query->where('name_compn', 'like', '%'.$searchTerm.'%');
            });
    })
    ->get();
   return $jobs;
  }
  public function getHistoryBySearch()
  {
    $history = HistorySearch::orderBy('id', 'desc')->first();
    return $history;
  }
}
