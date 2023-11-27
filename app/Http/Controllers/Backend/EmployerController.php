<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\DistrictService;
use App\Services\EmployerService;
use App\Services\provinceService;
use App\Services\WardService;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    protected $employerService;
    protected $provinceService;
    protected $districtService;
    protected $wardsService;

    public function __construct
    (EmployerService $employerService,
    ProvinceService $provinceService,
    DistrictService $districtService,
    WardService $wardsService
    )
    {
        $this->employerService = $employerService;
        $this->provinceService = $provinceService;
        $this->districtService = $districtService;
        $this->wardsService = $wardsService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $employers = $this->employerService->paginate(15);
       $config =  [
        'js' => [
            'js/option_two/plugins/switchery/switchery.js'
        ],
        'css' => [
            'css/option_two/plugins/switchery/switchery.css'
        ]
    ];
       $config['seo'] = config('apps.employer');
    //    dd($config['seo']);
       $template = 'backend.employer.index';
       return view('backend.dashboard.layout',compact('template','config','employers'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $provinces = $this->provinceService->allProvince();
       $config = [
        'css' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
        ],
        'js' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
            'library/location.js'
            ]
       ];
       $config['seo'] = config('apps.employer');

       $template = 'backend.employer.create';
       return view('backend.dashboard.layout',
       compact('template','config','provinces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if($this->userService->create($request)){
            // return redirect('user/index')->with('success', 'Thêm mới bản ghi thành công');
        // }
        // return redirect('user/index')->with('error', 'Thêm mới bản ghi không thành công.Hãy thử lại');
    }

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
