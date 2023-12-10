<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use Illuminate\Http\Request;

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
        $posts = $this->postService->paginatePostOfComp();
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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
