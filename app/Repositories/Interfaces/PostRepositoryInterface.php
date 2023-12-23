<?php

namespace App\Repositories\Interfaces;

/**
 * @package App\Repositories\Interfaces
 */
interface PostRepositoryInterface
{
  public function getAllPaginate($number);

  public function getPostOfCompany($number);

  public function getFeaturedJobOrderByDate();
  public function getFeaturedJob();

  public function findJobById($id);
  public function findJobByIdemp($id_emp);
  public function getFavouriteJob($id);

  public function getRecommentFavouriteJob($major,$address);
}
