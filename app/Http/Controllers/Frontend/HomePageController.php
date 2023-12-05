<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Services\EmployerService;
use App\Services\MajorService;
use App\Services\PostService;
use App\Services\provinceService;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    protected $provinceService;
    protected $employerService;
    protected $postService;
    protected $majorService;
    public function __construct
    (
    ProvinceService $provinceService,
    EmployerService $employerService,
    PostService $postService,
    MajorService $majorservice,
    )
    {
        $this->provinceService = $provinceService;
        $this->employerService = $employerService;
        $this->postService = $postService;
        $this->majorService = $majorservice;
    }
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
       $banners=Banner::orderBy('id','DESC')->paginate(10);
       $provinces = $this->provinceService->allProvince();
       $companys = $this->employerService->featuredCompany();
       $jobs = $this->postService->featuredJob();
       $majors=$this->majorService->featuredMajor();
       $config = [
        'css' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
        ],
        'js' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
            'library/location.js'
            ]
       ];
       $template = "frontend.pages.home";
       return view('index',
       compact('config','provinces','template','banners','companys','jobs','majors'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
      
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
