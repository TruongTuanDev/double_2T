<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\JobApply;
use App\Services\EmployerService;
use App\Services\PostService;
use App\Services\UserService;

class PreviewController extends Controller
{

  protected $postService;
  protected $employerService;
  protected $userService;
  public function __construct
    (
      PostService $postService,
      EmployerService $employerService,
      UserService $userService,
    )
    {
        $this->postService = $postService;
        $this->employerService = $employerService;
        $this->userService = $userService;
    }
  public function previewPdf($id)
  {
      $id_user = Auth()->id();
      $employer = $this->employerService->findCompanyByIdUser($id_user);
      $user = $this->userService->findById($id_user);
      $jobs = $this->postService->findJobByIdempListHandle($employer->id_emp);
      $model = JobApply::findOrFail($id);
      $pdfPath = $model->getFirstMedia()->getPath();
      $job->studentApplys()->withPivot('file_CV')->first()->pivot->file_CV;
  
      return view('preview.pdf', compact('jobs'));
  }
}
