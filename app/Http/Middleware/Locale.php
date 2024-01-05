<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $language = Session::get('website_language', config('app.locale'));
    // Lấy dữ liệu lưu trong Session, không có thì trả về default lấy trong config
        // config(['app.locale' => $language]);
        // 
        App::setLocale($language);
        return $next($request);
    }
}
