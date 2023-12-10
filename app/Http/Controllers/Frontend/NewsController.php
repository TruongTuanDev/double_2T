<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Banner;
use App\Models\Major;
use App\Models\Post;
use App\Models\User;
use App\Models\Settings;
use App\Rules\MatchOldPassword;
use App\Services\DistrictService;
use App\Services\EmployerService;
use App\Services\MajorService;
use App\Services\PostService;
use App\Services\UserService;
use App\Services\provinceService;
use App\Services\WardService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NewsController extends Controller
{
    protected $postService;
    protected $userService;
    protected $provinceService;
    protected $districtService;
    protected $wardsService;
    protected $employerService;
    protected $majorService;

    public function __construct
    (PostService $postService,
    ProvinceService $provinceService,
    EmployerService $employerService,
    MajorService $majorService
    )
    {
        $this->postService = $postService;
        $this->provinceService = $provinceService;
        $this->employerService = $employerService;
        $this->majorService = $majorService;
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::orderBy('id_news','DESC')->paginate(10);
        $config =  [
            'js' => [
                'js/option_two/plugins/switchery/switchery.js'
            ],
            'css' => [
                'css/option_two/plugins/switchery/switchery.css'
            ]
        ];
        $config['seo'] = config('apps.news');
        $sidebar = 'frontend.dashboard.layouts.sidebaremp';
        $template = 'backend.news.index';
        return view('frontend.dashboard.index',compact('template','config','news','sidebar'));
    }

    public function create()
    {
       $config = [
        'css' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
        ],
        'js' => [
            'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
            'library/location.js',
            ]
       ];
       $config['seo'] = config('apps.news');
       $sidebar = 'frontend.dashboard.layouts.sidebaremp';
       $template = 'backend.news.create';
       return view('frontend.dashboard.index',
       compact('template','config','sidebar'));
    }
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'title'=>'string|required',
            'create_date'=>'date|required',
            'image'=>'string|required',
            'content'=>'string|required',
            'status'=>'in:active,inactive',
            'view'=>'integer',
        ]);
        $data=$request->all();
        // dd($data);
        $idUser = Auth()->id();
        $data['id_emp'] = $idUser;
        $data['view'] =0;
        $data['status'] ='inactive';
        $status=News::create($data);
        if($status){
            request()->session()->flash('success','Thêm thành công');
        }
        else{
            request()->session()->flash('error','Thêm thất bại');
        }
        return redirect()->route('news.index');   

    }

    public function edit($id)
    {
        $config = [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'library/location.js',
            
                ]
        ];
        $config['seo'] = config('apps.news');
        $template = 'backend.news.edit';
        $sidebar = 'frontend.dashboard.layouts.sidebaremp';
        $news = News::findOrFail($id);
        return view('frontend.dashboard.index',compact('template','config','news','sidebar'));
    }

    public function update(Request $request, $id)
    {
        $news=News::findOrFail($id);
        $this->validate($request,
        [
            'title'=>'string|required',
            'image'=>'string|required',
            'content'=>'string|required',
            'status'=>'in:active,inactive',
            'view'=>'integer',
        ]);
        $data=$request->all();
        $status=$news->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật thất bại');
        }
        return redirect()->route('news.index');

    }
    public function destroy($id)
    {
        $delete=News::findorFail($id);
        $status=$delete->delete();
        if($status){
            request()->session()->flash('success','Xóa người dùng thành công');
        }
        else{
            request()->session()->flash('error','Xóa người dùng thất bại');
        }
        return redirect()->route('news.index');
    }
}
