<?php

namespace App\Services;

use App\Repositories\PostRepository;
use App\Services\Interfaces\PostServiceInterface;

/**
 * Class UserService
 * @package App\Services
 */
class PostService implements PostServiceInterface
{
  protected $postRepository;

  public function __construct(PostRepository $postRepository)
  {
    $this->postRepository = $postRepository;
  }
  public function getFavouriteJob($id)
  {
    $favoriteJob = $this->postRepository->getFavouriteJob($id);
    return $favoriteJob;
  }
  public function paginatePostOfComp(){
    $posts = $this->postRepository->getPostOfCompany(15);
    return $posts;
  }
  public function getAllPost()
  {
    $posts = $this->postRepository->getAll();
    return $posts;
  }
  public function featuredJob()
  {
    $posts = $this->postRepository->getFeaturedJob();
    return $posts;
  }
  public function findJobById($id)
  {
    $job = $this->postRepository->findJobById($id);
    return $job;
  }
  public function findJobByIdemp($id_emp)
  {
    $job = $this->postRepository->findJobByIdemp($id_emp);
    return $job;
  }
  public function findJobByIdempListHandle($id_emp)
  {
    $job = $this->postRepository->findJobByIdempListHandel($id_emp);
    return $job;
  }
  public function featuredJobOrderBydate(){
    $job = $this->postRepository->getfeaturedJobOrderBydate();
    return $job;
  }
  public function getRecommentFavouriteJob($id_major,$address){
    $job=$this->postRepository->getRecommentFavouriteJob($id_major,$address);
    return $job;
  }
  public function listJobBySearch($province_id, $searchTerm)
  {
    $jobs = $this->postRepository->getJobBySearch($province_id, $searchTerm);
    return $jobs;
  }
  public function historyBySearch()
  {
    $history = $this->postRepository->getHistoryBySearch();
    return $history;
  }
}
