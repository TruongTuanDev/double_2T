<?php

namespace App\Http\Middleware;

use Closure;

class Home
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // dd($request->user());
        if($request->user() ==null || $request->user()->role=='user'){
            return $next($request);
        }
        else{
            request()->session()->flash('error','Bạn không có quyền truy cập vào đường dẫn này');
            return redirect()->route('employer.dashboard');
        }
    }
}
