<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Services\PostService;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    protected $favouriteJob;

    public function __construct
    (
        PostService $favouriteJob
    )
    {
        $this->favouriteJob = $favouriteJob;
    }
    public function index()
    {
       $id_student = Auth()->id();
       $posts = $this->favouriteJob->getFavouriteJob($id_student);
       dd($posts);
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
        $template = "Frontend.dashboard.home.index";
        return view('Frontend.dashboard.layout',compact('template','config'));
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
        $student=Student::where('id_user', $iduser)->first();
        $config['seo'] = config('apps.user');
        $template = 'frontend.dashboard.user.create';
        return view('frontend.dashboard.layout',
        compact('template','config','student'));
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
        $template = "Frontend.dashboard.home.index";
        return view('Frontend.dashboard.layout',compact('template','config'));

    }
}
