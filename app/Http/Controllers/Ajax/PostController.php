<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Favjob;
use App\Models\Post;
use App\Services\StudentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
  protected $post=null;
  protected $studentService;
  public function __construct(
    Post $post,
    StudentService $studentService
    ){
      $this->post=$post;
      $this->studentService=$studentService;
  }
 
  public function addToCart($postId)
  {
      $post = Post::findOrFail($postId);
      $user_id = Auth()->id();
      $cartItem = Favjob::where('post_id_post', $post->id_post)->first();
      $student = $this->studentService->findStudentByIdUser($user_id);
      if ($cartItem) {
          $cartItem->status = 'inactive'; 
          $cartItem->delete();
          return redirect()->back()->with('success', 'Đã loại bỏ công việc khỏi danh sách yêu thích.');
      } else {
          Favjob::create([
              'post_id_post' => $post->id_post,
              'student_id_stu' => $student->id_stu,
              'status' => 'active'
          ]);
          return redirect()->back()->with('success', 'Đã thêm công việc vào danh sách yêu thích.');
      }
      
  }

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
