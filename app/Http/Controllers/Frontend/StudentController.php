<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Employer;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Follow;
use App\Services\MajorService;
use App\Services\PostService;
use App\Services\StudentService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    protected $favouriteJob;
    protected $studentService;
    protected $userService;
    protected $majorService;

    public function __construct
    (
        PostService $favouriteJob,
        StudentService $studentService,
        UserService $userService,
        MajorService $majorService,
    )
    {
        $this->favouriteJob = $favouriteJob;
        $this->studentService = $studentService;
        $this->userService = $userService;
        $this->majorService = $majorService;
    }
    public function favourite()
    {
       $iduser = Auth()->id();
       $student = $this->studentService->findStudentByIdUser($iduser);
    //    dd($student->id_stu);
       $posts = $this->favouriteJob->getFavouriteJob($student->id_stu);
    //    dd($posts);
    //    $count = count($posts);
       $config =  [
        'js' => [
            'js/option_two/plugins/switchery/switchery.js'
        ],
        'css' => [
            'css/option_two/plugins/switchery/switchery.css'
        ]
    ];
       $config['seo'] = config('apps.student');
    //    dd($config['seo']);
       $template = 'backend.post.index';
       return view('frontend.dashboard.layout',compact('template','config','posts'));
    }
    public function home()
    {
        $config = $this->config();
        $template = "frontend.dashboard.home.student";
        return view('frontend.dashboard.layout',compact('template','config'));
    }
    private function config(){
        return [
            'js' => [

            ],
            'css' => [

            ]
            ];
    }
    public function UpdateInfor($iduser){
        $config = [
         'css' => [
             'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
         ],
         'js' => [  
             'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
             'library/location.js',
             ]
        ];
        $user = $this->userService->findById($iduser);
        $student = $this->studentService->findStudentByIdUser($iduser);
        $majors = $this->majorService->allMajor();

        $config['seo'] = config('apps.user');
        $template = 'frontend.dashboard.user.create';
        return view('frontend.dashboard.layout',
        compact('template','config','user','student','majors'));
     }
     public function store(Request $request)
    {
        $this->validate($request,
        [
            'university'=>'string',
            'major'=>'string',
            'birthday'=>'string',
            'avatar'=>'string',
            'description'=>'string',
            'id_user'=>'integer',
        ]);
        $data=$request->all();
        $data['id_user']=Auth()->user()->id;
        $data['status'] =  'active';
        $student=Student::where('id_user', Auth()->user()->id)->first();
        $status=$student->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật thất bại');
        }
        $config=$this->config();
        $template = "frontend.dashboard.home.student";
        return view('frontend.dashboard.layout',compact('template','config'));
    
    }
    public function applyList(){
        $id_user = Auth()->id();
        $student = $this->studentService->findStudentByIdUser($id_user);
        $posts = $this->studentService->applyListOfStudent($student->id_stu);
        $config =  [
            'js' => [
                'js/option_two/plugins/switchery/switchery.js'
            ],
            'css' => [
                'css/option_two/plugins/switchery/switchery.css'
            ]
        ];
           $config['seo'] = config('apps.student');
        //    dd($config['seo']);
           $template = 'backend.post.index';
           return view('frontend.dashboard.layout',compact('template','config','posts'));

    }
    public function followingList(){
        $id_user = Auth()->id();
        $student = $this->studentService->findStudentByIdUser($id_user);
        $employers=$student->employerFollows;
        $config =  [

            'js' => [
                'js/option_two/plugins/switchery/switchery.js'
            ],
            'css' => [
                'css/option_two/plugins/switchery/switchery.css'
            ]
        ];
           $config['seo'] = config('apps.student');
        //    dd($config['seo']);
           $template = 'frontend.dashboard.employer.followemp';
           return view('frontend.dashboard.layout',compact('template','config','employers'));
    }
    
}
