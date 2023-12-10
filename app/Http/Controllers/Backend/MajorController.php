<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Services\MajorService;
use Illuminate\Http\Request;
use App\Models\Major;
class MajorController extends Controller
{
    protected $majorService;
    public function __construct
    (
    MajorService $majorService,
    )
    {
        $this->majorService = $majorService;
    }
    public function index()
    {
       $majors = $this->majorService->allMajor();
       $config =  [
        'js' => [
            'js/option_two/plugins/switchery/switchery.js'
        ],
        'css' => [
            'css/option_two/plugins/switchery/switchery.css'
        ]
        
    ];
    $config['seo'] = config('apps.major');
       $template = 'backend.major.index';
       return view('backend.dashboard.layout',compact('template','config','majors'));
    }

    public function create()
    {
        $config =  [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css',
                ''
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                ]
        ];
        $config['seo'] = config('apps.major');
        $template = 'backend.major.create';
        return view('backend.dashboard.layout',compact('template','config'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'name'=>'string|required|max:50',
            'job_quantity'=>'integer|nullable',
        ]);
        $data=$request->all();
        $status=Major::create($data);
        if($status){
            request()->session()->flash('success','Thêm major thành công');
        }
        else{
            request()->session()->flash('error','Lỗi khi thêm major');
        }
        return redirect()->route('major.index');
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
    public function edit($id_maj)
    {
        $major=Major::where('id_maj',$id_maj)->first();
        $config =  [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css',
                ''
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                ]
        ];
        $config['seo'] = config('apps.major');
        $template = 'backend.major.edit';
        return view('backend.dashboard.layout',compact('template','config','major'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_maj)
    {
        $major=Major::where('id_maj',$id_maj)->first();
        $major->name =$request->name; // Cập nhật giá trị thuộc tính 'name' của đối tượng
        $major->job_quantity = $request->job_quantity;    
        $status=$major->save();
        if($status){
            request()->session()->flash('success','major successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating major');
        }
        return redirect()->route('major.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner=Major::findOrFail($id);
        $status=$banner->delete();
        if($status){
            request()->session()->flash('success','Major successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting major');
        }
        return redirect()->route('major.index');
    }
}
