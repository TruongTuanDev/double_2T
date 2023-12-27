<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Ajax;
use Illuminate\Http\Request;
use App\Models\Follow;
use App\Services\StudentService;
use App\Http\Controllers\Controller;
class FollowController extends Controller
{
    protected $post=null;
    protected $studentService;
    public function __construct(
    StudentService $studentService
    ){
      $this->studentService=$studentService;
  }
 
    public function follow($id_emp)
  {
    $id_user = Auth()->id();
    $student = $this->studentService->findStudentByIdUser($id_user);
      $follow = Follow::where('student_id_stu', $student->id_stu)->where('employer_id_emp',$id_emp)->first();
      if ($follow) {
        $follow->status = 'inactive'; 
        $follow->delete();
          return redirect()->back()->with('success', 'Đã hủy follow công ti.');
      } else {
        Follow::create([
            'student_id_stu' => $student->id_stu,
              'employer_id_emp' => $id_emp,
              'status' => 'active'
          ]);
          return redirect()->back()->with('success', 'Đã follow công ti.');
      }
      
  }
}
