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
  public function findJobById($id);
  public function getFavouriteJob($id);
}
