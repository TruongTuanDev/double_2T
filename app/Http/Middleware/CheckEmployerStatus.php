<?php

namespace App\Http\Middleware;

use App\Services\EmployerService;
use App\Services\StudentService;
use Closure;


class CheckEmployerStatus
{
    protected $emplyerService;
    public function __construct
    (
    EmployerService $emplyerService,
    )
    {
        $this->emplyerService = $emplyerService;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user_id = Auth()->id();
        $employer = $this->emplyerService->findCompanyByIdUser($user_id);
        if ($employer && $employer->status !== 'active') {
            return redirect()->route('employer.update')->with('error','Bạn phải cập nhật thông tin trước');
        }

        return $next($request);
    }
}
