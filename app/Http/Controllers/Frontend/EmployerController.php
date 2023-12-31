<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\Follow;
use App\Models\Favjob;
use App\Models\User;
use App\Services\UserService;
use App\Models\Settings;
use App\Rules\MatchOldPassword;
use App\Services\DistrictService;
use App\Services\EmployerService;
use App\Services\StudentService;
use App\Services\PostService;
use App\Services\provinceService;
use App\Services\WardService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
    protected $userService;
    protected $provinceService;
    protected $studentsService;
    protected $districtService;
    protected $wardsService;
    protected $employersService;
    protected $postService;
    protected $studentService;

    public function __construct
    (UserService $userService,
    ProvinceService $provinceService,
    DistrictService $districtService,
    WardService $wardsService,
    EmployerService $employersService,
    StudentService $studentsService,
    PostService $postService,
    StudentService $studentService
    )
    {
        $this->userService = $userService;
        $this->provinceService = $provinceService;
        $this->districtService = $districtService;
        $this->wardsService = $wardsService;
        $this->employersService = $employersService;
        $this->studentsService = $studentsService;
        $this->postService = $postService;
        $this->studentService=$studentService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    //    $users = $this->userService->paginate(15);
       $config =  [
        'js' => [
            'js/option_two/plugins/switchery/switchery.js'
        ],
        'css' => [
            'css/option_two/plugins/switchery/switchery.css'
        ]
    ];
       $config['seo'] = config('apps.user');
    //    dd($config['seo']);
       $sidebar = 'frontend.dashboard.layouts.sidebaremp';
       $template = 'frontend.employer.index';
       return view('frontend.dashboard.index',compact('template','config','sidebar'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function update()
    {
      //  $provinces = $this->provinceService->allProvince();
       $config = [
        'css' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
        ],
        'js' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
            'library/location.js',
            ]
       ];
       $config['seo'] = config('apps.employer');
       $template = 'frontend.dashboard.employer.create';
       $sidebar = 'frontend.dashboard.layouts.sidebaremp';
       return view('frontend.dashboard.index',
       compact('template','config','sidebar'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function updateInfor(Request $request)
    {
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
            'staff_number'=>'integer',
        ]);

        $data=$request->all();

        $data = $request->except(['_token', 'files','send']);
        // dd($data);
        $idUser = Auth()->id();
        $data['id_user'] =  $idUser;
        $data['status'] =  'active';
        $status = Employer::where('id_user', $idUser)->update($data);
        // $employer=Employer::where('id_user', Auth()->user()->id)->first();
        // $status=$employer->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thông tin thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật thông tin thất bại');
        }
        return redirect()->route('employer.update');
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
        $config['seo'] = config('apps.user');
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
        dd($profile);
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

    

    public function changePassword(){
        $config = [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                ]
        ]; 
        $config['seo'] = config('apps.user');
        $template = 'backend.layouts.changePassword';
        return view('backend.dashboard.layout',compact('template','config','data'));
    }
    public function changPasswordStore(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect()->route('admin')->with('success','Mật khẩu thay đổi thành công');
    }

    public function jobDetail($id_emp){
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
        $id_user = Auth()->id();
        // dd( $id_user );
        $student = $this->studentsService->findStudentByIdUser($id_user);
         $company = $this->employersService->findCompanyById($id_emp);
         $follow = Follow::where('status', 'active')->where('employer_id_emp',$company->id_emp)
                        ->where('student_id_stu', $student->id_stu)
                        ->first();
         $jobfavs = Favjob::where('status', 'active')
                        ->where('student_id_stu', $student->id_stu)
                        ->get();
         $template = 'frontend.pages.companys-detail';
         $job = $company->posts->all();
         $historySearch = $this->postService->historyBySearch();
         return view('index',compact('config','provinces','job','template','company','historySearch','follow','jobfavs'));
     }
     public function listFollower(){
        $id_user = Auth()->id();
        $employer= $this->employersService->findCompanyByIdUser($id_user);
        $students=$employer->studentFollows;
        // $users=$students->users;
        $config =  [
    
            'js' => [
                'js/option_two/plugins/switchery/switchery.js'
            ],
            'css' => [
                'css/option_two/plugins/switchery/switchery.css'
            ]
        ];
           $config['seo'] = config('apps.student');
           $sidebar='frontend.dashboard.layouts.sidebaremp';
        //    dd($config['seo']);
           $template = 'frontend.dashboard.employer.follower';
           return view('frontend.dashboard.layout',compact('template','config','students','sidebar'));
    } 
    public function listAllEmp(){
            $emps=$this->employersService->getAllCompany();
            $id_user = Auth()->id();
            $student = $this->studentService->findStudentByIdUser($id_user);
             $follows = Follow::where('status', 'active')
                            ->where('student_id_stu', $student->id_stu)
                            ->get();
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
            $historySearch = $this->postService->historyBySearch();
            $template = 'frontend.pages.list-compn';
            return view('index',compact('config','provinces','emps','student',
            'template','follows','historySearch'));
    }
}


