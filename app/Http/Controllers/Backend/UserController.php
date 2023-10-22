<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use App\Models\Province;
use App\Services\provinceService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    protected $provinceService;

    public function __construct
    (UserService $userService,
    ProvinceService $provinceService
    )
    {
        $this->userService = $userService;
        $this->provinceService = $provinceService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $users = $this->userService->paginate(15);
       $config = $this->config();
       $config['seo'] = config('apps.user');
    //    dd($config['seo']);
       $template = 'backend.user.index';
       return view('backend.dashboard.layout',compact('template','config','users'));
    }
    private function config(){
        return [
            'js' => [
                'js/option_two/plugins/switchery/switchery.js'
            ],
            'css' => [
                'css/option_two/plugins/switchery/switchery.css'
            ]
        ];
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $provinces = $this->provinceService->allProvince();
       $config['seo'] = config('apps.user');
       $template = 'backend.user.create';
       return view('backend.dashboard.layout',compact('template','config','provinces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
