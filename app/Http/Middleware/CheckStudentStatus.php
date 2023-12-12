<?php

namespace App\Http\Middleware;

use App\Services\StudentService;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

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
        $student = $this->$studentService->get
        if ($student && $student->status !== 'active') {
            return redirect()->route('admin.login')->with('error','Bạn phải đăng nhập trước');
        }

        return $next($request);
    }
}
