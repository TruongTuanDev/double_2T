<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Favjob;
use App\Models\HistorySearch;
use App\Models\JobApply;
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
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

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
    UserService $userService,
    )
    {
        $this->postService = $postService;
        $this->provinceService = $provinceService;
        $this->employerService = $employerService;
        $this->majorService = $majorService;
        $this->studentService = $studentService;
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $posts = $this->postService->paginatePostOfComp();

      //  $users = $this->userService->paginate(15);
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
        $employer = $this->employerService->findCompanyByIdUser($idUser);
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
        // dd( $id_user );
        $student = $this->studentService->findStudentByIdUser($id_user);
        // dd($student);
        $job = $this->postService->findJobById($id);
        $job->traffic_volume+=1;
        $job->save();
        $jobfav = Favjob::where('status', 'active')->where('post_id_post',$job->id_post)
                        ->where('student_id_stu', $student->id_stu)
                        ->first();
         $jobfavs = Favjob::where('status', 'active')
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
        $job_recomment = $this->postService->getRecommentFavouriteJob($job->id_major,$job->address);
        $company = $job->companys;
        $job_company=$this->postService->findJobByIdemp($company->id_emp);
        $company_recomment=$this->employerService->getRecommentFavouriteCompany($job->address);
        $historySearch = $this->postService->historyBySearch();
        $template = 'frontend.pages.jobs-detail';
        return view('index',compact('config','provinces','job','student',
        'template','company','jobfav','job_recomment','company_recomment','job_company','jobfavs','historySearch'));
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
    public function listPass(){
        
    }
    public function listFail(){
       
    }
    public function uploadFileCV(Request $request)
    {
        $this->validate($request, [
            'file_CV' => 'required|file|mimes:pdf,doc,docx',
        ]);
    
        if ($request->hasFile('file_CV')) {
            $file = $request->file('file_CV');
            $folder = 'double-2t';
            $imageUrl = $file->storeOnCloudinary(['folder' => $folder])->getSecurePath();
    
            $data = $request->except('file_CV');
            $data['file_CV'] = $imageUrl;
    
            $jobApply = JobApply::create($data);
    
            if ($jobApply) {
                return redirect()->route('home')->with('success', 'Nộp CV thành công');
            } else {
                return redirect()->route('home')->with('error', 'Nộp CV thất bại');
            }
        } else {
            return redirect()->route('home')->with('error', 'Vui lòng điền đầy đủ thông tin');
        }
    }
    public function storeCVOfStudent(Request $request){
        $this->validate($request,
        [
          
        ]);
        $data=$request->all();
        // dd($data);
        $status=JobApply::create($data);
        if($status){
            request()->session()->flash('success','Nộp cv thành công');
        }
        else{
            request()->session()->flash('error','Nộp cv thất bại');
        }
    }
    public function removeApplicant($id_job, $id_student)
{
        $job = Post::find($id_job);

        $job->studentApplys()->detach($id_student);

     return request()->session()->flash('status','Bạn đã xóa sinh viên khỏi danh sách ứng tuyển');

   } 
   public function searchJobs(Request $request)
        {
       $provinces = $this->provinceService->allProvince();
       $historySearch = $this->postService->historyBySearch();
       $config = [
        'css' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
        ],
        'js' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
            'library/location.js'
            ]
       ];
            $provinceId = $request->input('province_id');
            $searchTerm = $request->input('data_search');
            $data=$request->all();
            // dd($data);
            $status=HistorySearch::create($data);
            $jobs = $this->postService->listJobBySearch($provinceId,$searchTerm);
            // dd($jobs);
            $template = 'frontend.pages.jobs-search';
            return view('index', compact('jobs','template','config','provinces','historySearch'));
        }
    public function listHandle(){
        $id_user = Auth()->id();
        $employer = $this->employerService->findCompanyByIdUser($id_user);
        $user = $this->userService->findById($id_user);
        $jobs = $this->postService->findJobByIdempListHandle($employer->id_emp);
        // dd($jobs);
        // foreach ($jobs as $job){
        //     dd($job->studentApplys);
        // }
        // $students = $this->employerService->listStudentSendCV($job->id_post);
        // dd($students);
      //  $users = $this->userService->paginate(15);
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
       $template = 'backend.post.apply';
       return view('frontend.dashboard.index',compact('template','config','sidebar','jobs','user'));
    }
}
