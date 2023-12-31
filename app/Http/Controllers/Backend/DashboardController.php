<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\EmployerService;
use App\Services\FollowService;
use App\Services\MajorService;
use App\Services\NewsService;
use App\Services\PostService;
use App\Services\ProvinceService;
use App\Services\StudentService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $provinceService;
    protected $employerService;
    protected $postService;
    protected $majorService;
    protected $userService;
    protected $studentService;
    protected $newsService;
    protected $followerService;
    public function __construct
    (
    ProvinceService $provinceService,
    EmployerService $employerService,
    PostService $postService,
    MajorService $majorservice,
    UserService $userService,
    StudentService $studentService,
    NewsService $newsService,
    FollowService $followerService,
    )
    {
        $this->provinceService = $provinceService;
        $this->employerService = $employerService;
        $this->postService = $postService;
        $this->majorService = $majorservice;
        $this->userService = $userService;
        $this->studentService = $studentService;
        $this->followerService = $followerService;
        $this->newsService = $newsService;

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userCount = $this->userService->allAdmin()->count();
        $countStudent = $this->studentService->allStudent()->count();
        $countEmployer = $this->employerService->getAllCompany()->count();
        $countPost = $this->postService->getAllPost()->count();
        $config = $this->config();
        $template = "backend.dashboard.home.index";
        return view('backend.dashboard.layout',
        compact('template','config','countStudent','userCount','countEmployer','countPost'));
    }
    public function employer()
    {
        $id_user = Auth()->id();
        $employer = $this->employerService->findCompanyByIdUser($id_user);
        $config = $this->config();
        $countJob = $this->postService->findJobByIdemp($employer->id_emp)->count();
        $countNews = $this->newsService->findNewsByIdEmp($employer->id_emp)->count();
        $countStudentApply = $this->postService->findJobByIdempListHandle($employer->id_emp)->count();
        $countFollower = $this->followerService->listFollowers($employer->id_emp)->count();
        $sidebar = "frontend.dashboard.layouts.sidebaremp";
        $template = "frontend.dashboard.home.employer";
        return view('frontend.dashboard.index',
        compact('template','config','sidebar','countJob','countNews','countJob','countStudentApply','countFollower'));
    }
    private function config(){
        return [
            'js' => [
                'js/option_two/plugins/flot/jquery.flot.js',
                'js/option_two/plugins/flot/jquery.flot.tooltip.min.js',
                'js/option_two/plugins/flot/jquery.flot.spline.js',
                'js/option_two/plugins/flot/jquery.flot.resize.js',
                'js/option_two/plugins/flot/jquery.flot.pie.js',
                'js/option_two/plugins/flot/jquery.flot.symbol.js',
                'js/option_two/plugins/flot/jquery.flot.time.js',
                'js/option_two/plugins/peity/jquery.peity.min.js',
                'js/option_two/demo/peity-demo.js',
                'js/option_two/inspinia.js',
                'js/option_two/plugins/pace/pace.min.js',
                'js/option_two/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js',
                'js/option_two/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
                'js/option_two/plugins/easypiechart/jquery.easypiechart.js',
                'js/option_two/plugins/sparkline/jquery.sparkline.min.js',
                'js/option_two/demo/sparkline-demo.js'
            ]
        ];
    }
  
}
