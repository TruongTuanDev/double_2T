<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Favjob;
use App\Models\Major;
use App\Models\Post;
use App\Models\User;
use App\Models\Settings;
use App\Models\Student;
use App\Rules\MatchOldPassword;
use App\Services\DistrictService;
use App\Services\EmployerService;
use App\Services\MajorService;
use App\Services\PostService;
use App\Services\UserService;
use App\Services\provinceService;
use App\Services\StudentService;
use App\Services\WardService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    protected $postService;
    protected $userService;
    protected $provinceService;
    protected $districtService;
    protected $wardsService;
    protected $employerService;
    protected $majorService;
    protected $studentService;

    public function __construct
    (PostService $postService,
    ProvinceService $provinceService,
    EmployerService $employerService,
    MajorService $majorService,
    StudentService $studentService,
    )
    {
        $this->postService = $postService;
        $this->provinceService = $provinceService;
        $this->employerService = $employerService;
        $this->majorService = $majorService;
        $this->studentService = $studentService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $posts = $this->postService->paginatePostOfComp();

      //  $users = $this->userService->paginate(15);
      $posts =Post::orderBy('id_post','DESC')->paginate(10);
       $config =  [
        'js' => [
            'js/option_two/plugins/switchery/switchery.js'
        ],
        'css' => [
            'css/option_two/plugins/switchery/switchery.css'
        ]
    ];
       $config['seo'] = config('apps.post');
       $sidebar = 'frontend.dashboard.layouts.sidebaremp';
       $template = 'backend.post.index';
       return view('frontend.dashboard.index',compact('template','config','sidebar','posts'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $provinces = $this->provinceService->allProvince();
       $majors = $this->majorService->allMajor();
       $config = [
        'css' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
        ],
        'js' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
            'library/location.js',
            ]
       ];
       $config['seo'] = config('apps.post');
       $sidebar = 'frontend.dashboard.layouts.sidebaremp';
       $template = 'backend.post.create';
       return view('frontend.dashboard.index',
       compact('template','config','sidebar','provinces','majors'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'title'=>'string|required',
            'quantity'=>'string',
            'address'=>'string',
            'description'=>'string',
            'requirement'=>'string',
            'salary'=>'string',
            'position'=>'string|required',
            'status'=>'in:active,inactive',
        ]);
        $data=$request->all();
        // dd($data);
        $idUser = Auth()->id();
        $employer = $this->employerService->findCompanyById($idUser);
        $id_major = $data['id_major'];
        $data['status'] = 'inactive';
        $data['id_emp'] = $employer->id_emp;
        $data['exp_date'] = now()->addDays(30);
        $major= $this->majorService->findMajorById($id_major);
        if ($major) {
            $major->job_quantity += 1;
            $major->save();
        }
        $status=Post::create($data);
        if($status){
            request()->session()->flash('success','Thêm thành công');
        }
        else{
            request()->session()->flash('error','Thêm thất bại');
        }
        return redirect()->route('post.index');   

    }
    public function jobDetail($id){
        $id_user = Auth()->id();
        $student = $this->studentService->findStudentByIdUser($id_user);
       $jobfav = Favjob::where('status', 'active')
                        ->where('student_id', $student->id_stu)
                        ->first();
        // dd($jobfav);
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
       
        $job = $this->postService->findJobById($id);
        $company = $job->companys;
        $template = 'frontend.pages.jobs-detail';
        return view('index',compact('config','provinces','job','template','company','jobfav'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinces = $this->provinceService->allProvince();
        $config = [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'library/location.js',
            
                ]
        ];
        $config['seo'] = config('apps.post');
        $template = 'backend.user.edit';
        $user = User::findOrFail($id);
        $user->birthday = Carbon::parse($user->birthday)->format('Y-m-d');
        return view('backend.dashboard.layout',compact('template','config','provinces','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $this->validate($request,
        [
            'name'=>'string|required|max:30',
            'phone'=>'string|required|max:12',
            'province_id'=>'string|required|',
            'district_id'=>'string|required|',
            'ward_id'=>'string|required|',
            'address'=>'string',
            'birthday'=>'string',
            'photo'=>'string',
            'description'=>'string',
            'email'=>'string|required|unique:users',
            'role'=>'required|in:admin,user',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        $status=$user->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật thất bại');
        }
        return redirect()->route('user.index');

    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=User::findorFail($id);
        $status=$delete->delete();
        if($status){
            request()->session()->flash('success','Xóa người dùng thành công');
        }
        else{
            request()->session()->flash('error','Xóa người dùng thất bại');
        }
        return redirect()->route('user.index');
    }

    public function profile(){
        $profile=Auth()->user();
        $config = [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'library/location.js',
            
                ]
        ];
        $config['seo'] = config('apps.user');
        $template = 'backend.user.profile';
        return view('backend.dashboard.layout',compact('template','config','profile'));
    }

    public function profileUpdate(Request $request,$id){
        // return $request->all();
        $user=User::findOrFail($id);
        $data=$request->all();
        $status=$user->fill($data)->save();
        if($status){
            request()->session()->flash('success','Đã cập nhật lại trang cá nhân của bạn');
        }
        else{
            request()->session()->flash('error','Hãy thử lại!');
        }
        return redirect()->back();
    }

    public function settings(){
        $data=Settings::first();
        $config = [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                ]
        ]; 
        $config['seo'] = config('apps.user');
        $template = 'backend.user.setting';
        return view('backend.dashboard.layout',compact('template','config','data'));
    }
}
