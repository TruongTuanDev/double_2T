<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Services\DistrictService;
use App\Services\EmployerService;
use App\Services\PostService;
use App\Services\provinceService;
use App\Services\UserService;
use App\Services\WardService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmployerController extends Controller
{
    protected $employerService;
    protected $provinceService;
    protected $districtService;
    protected $wardsService;
    protected $userService;
    protected $postService;

    public function __construct
    (EmployerService $employerService,
    ProvinceService $provinceService,
    DistrictService $districtService,
    WardService $wardsService,
    UserService $userService,
    PostService $postService,
    )
    {
        $this->employerService = $employerService;
        $this->provinceService = $provinceService;
        $this->districtService = $districtService;
        $this->wardsService = $wardsService;
        $this->userService = $userService;
        $this->postService = $postService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $employers = $this->employerService->paginate(15);
       $employerss = $this->employerService->getAllCompany();
       $count = count($employers);
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
       return view('backend.dashboard.layout',compact('template','config','employers','count'));
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
    public function edit($id)
    {
        $employer=Employer::findOrFail($id);
        $config =  [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css',
                ''
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                ]
        ];
        $config['seo'] = config('apps.employer');
        $template = 'backend.employer.edit';
        return view('backend.dashboard.layout',compact('template','config','employer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $employer = $this->employerService->findCompanyById($id);
        $this->validate($request,
        [
            'name_compn'=>'string|required',
            'description'=>'string',
            'logo'=>'string',
            'background'=>'string',
            'slodan'=>'string',
            'address'=>'string',
            'treatment'=>'string',
            'website'=>'string',
            'scale'=>'integer',
        ]);
        $data=$request->all();
        $data = $request->except(['_token', 'files','send']);
        // dd($data);
        // $status =$employer->update($data);
        // $employer=Employer::where('id_user', Auth()->user()->id)->first();
        $status=$employer->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thông tin thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật thông tin thất bại');
        }
        return redirect()->route('employer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function filter(Request $request)
{
    $searchText = $request->input('searchText');
    $employers = Employer::where('name_compn', 'like', '%' . $searchText . '%')
                        ->orWhere('address', 'like', '%' . $searchText . '%')
                        ->get();
    return view('employer.index', ['employers' => $employers])->render();
}
    public function destroy($id)
    {
        $employer=$this->employerService->findCompanyById($id);
        $status=$employer->delete();
        if($status){
            request()->session()->flash('success','Xóa nhà tuyển dụng thành công');
        }
        else{
            request()->session()->flash('error','Xóa nhà tuyển dụng thất bại');
        }
        return redirect()->route('employer.index');
    }
    // public function sendMail(){
    //     $id_user = Auth()->id();
    //     $employer = $this->employerService->findCompanyByIdUser($id_user);
    //     $user = $this->userService->findById($id_user);
    //     $jobs = $this->postService->findJobByIdempListHandle($employer->id_emp);
    //    $config =  [
    //     'js' => [
    //         'js/option_two/plugins/switchery/switchery.js'
    //     ],
    //     'css' => [
    //         'css/option_two/plugins/switchery/switchery.css'
    //     ]
    //    ];
    //    $config['seo'] = config('apps.post');
    //    $sidebar = 'frontend.dashboard.layouts.sidebaremp';
    //    $template = 'backend.post.apply';
    //    $name = "Tuấn đẹp trai";
    //    Mail::send('frontend.mails.notice-pass',compact('name'), function($email) use ($name) {
    //        $email->subject('Thư mời phỏng vấn');
    //        $email->to('tuanhulonhat@gmail.com',$name);
    //     });
    //     return view('frontend.dashboard.index',compact('template','config','sidebar','jobs','user'));
    // }
}
