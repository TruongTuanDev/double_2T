<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::orderBy('id','DESC')->paginate(10);
        $config =  [
            'js' => [
                
            ],
            'css' => [
                
            ]
        ];
        $config['seo'] = config('apps.banner');
        $template = 'backend.news.index';
        return view('backend.dashboard.layout',compact('template','config','news'));
    }
    public function inactive()
    {
        $news=News::where('status','inactive')->get();
        $config =  [
            'js' => [
                'js/option_two/plugins/switchery/switchery.js'
            ],
            'css' => [
                'css/option_two/plugins/switchery/switchery.css'
            ]
        ];
        $config['seo'] = config('apps.news');
        $sidebar = 'backend.dashboard.components.sidebar';
        $template = 'backend.news.inactive';
        return view('frontend.dashboard.index',compact('template','config','news','sidebar'));
    }
    public function active()
    {
        $news=News::where('status','active')->get();
        $config =  [
            'js' => [
                'js/option_two/plugins/switchery/switchery.js'
            ],
            'css' => [
                'css/option_two/plugins/switchery/switchery.css'
            ]
        ];
        $config['seo'] = config('apps.news');
        $sidebar = 'backend.dashboard.components.sidebar';
        $template = 'backend.news.active';
        return view('frontend.dashboard.index',compact('template','config','news','sidebar'));
    }
    public function updateactive($id_news)
    {
        $news=News::findOrFail($id_news);
        $news->status='active';
        $status=$news->save();
        if($status){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật thất bại');
        }
        return redirect()->route('news.inactive');

    }
}
