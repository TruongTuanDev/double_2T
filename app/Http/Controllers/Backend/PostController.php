<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Services\PostService;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    protected $postService;
    public function __construct
    (
    PostService $postService,
    )
    {
        $this->postService = $postService;

    }
    public function listPost(){
        $posts = $this->postService->featuredJobOrderBydate();
        $config =  [
            'js' => [
                
            ],
            'css' => [
                
            ]
        ];
        $config['seo'] = config('apps.post');
        $template = 'backend.post.index';
        return view('backend.dashboard.layout',compact('template','config','posts'));
    }
    public function inactive()
    {
        $posts=Post::where('status','inactive')->get();
        $config =  [
            'js' => [
                'js/option_two/plugins/switchery/switchery.js'
            ],
            'css' => [
                'css/option_two/plugins/switchery/switchery.css'
            ]
        ];
        $config['seo'] = config('apps.post');
        $sidebar = 'backend.dashboard.components.sidebar';
        $template = 'backend.post.inactive';
        return view('frontend.dashboard.index',compact('template','config','posts','sidebar'));
    }
    public function active()
    {
        $posts=Post::where('status','active')->get();
        $config =  [
            'js' => [
                'js/option_two/plugins/switchery/switchery.js'
            ],
            'css' => [
                'css/option_two/plugins/switchery/switchery.css'
            ]
        ];
        $config['seo'] = config('apps.post');
        $sidebar = 'backend.dashboard.components.sidebar';
        $template = 'backend.post.active';
        return view('frontend.dashboard.index',compact('template','config','posts','sidebar'));
    }
    public function updateactive($id_post)
    {
        $post=Post::findOrFail($id_post);
        $emp=Employer::findOrFail($post->id_emp);
        $post->status='active';
        $emp->job_quantity+=1;
        $status_emp=$emp->save();
        $status=$post->save();
        if($status && $status_emp){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật thất bại');
        }
        return redirect()->route('posts.inactive');

    }
}
