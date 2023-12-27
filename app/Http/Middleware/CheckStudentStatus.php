<?php

namespace App\Http\Middleware;

use App\Services\StudentService;
use Closure;


class CheckStudentStatus
{
    protected $studentService;
    public function __construct
    (
    StudentService $studentService,
    )
    {
        $this->studentService = $studentService;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $student_id = Auth()->id();
        $student = $this->studentService->findStudentById($student_id);
        if ($student && $student->status !== 'active') {
            return redirect()->route('user.information')->with('error','Bạn phải cập nhật thông tin trước');
        }
        return $next($request);
    }
}
