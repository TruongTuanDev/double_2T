<?php

namespace App\Services\Interfaces;

/**
 * @package App\Services\Interfaces
 */
interface PostServiceInterface
{
  public function paginatePostOfComp();
  public function getAllPost();
  public function featuredJob();
  public function featuredJobOrderBydate();
  public function findJobById($id);
  public function findJobByIdemp($id_emp);
  public function getFavouriteJob($id);
  public function getRecommentFavouriteJob($id_major,$address);
}
