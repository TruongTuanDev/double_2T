<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        // dd(Auth::id());
        return view('backend.auth.login');
    }
    /**
     * Display a listing of the resource.
     */
    public function login(AuthRequest $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (User::where('email', $request->email)->exists() && User::where('password', $request->password)->exists()) {
            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard.index')->with('success', 'Đăng nhập thành công');
            }
        }
        return redirect()->route('auth.admin')->with('error','Email hoặc mật khẩu không chính xác');
    }
    public function logout(Request $request)
        {
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
        
            return redirect()->route('auth.admin')->with('info','Bạn đã đăng xuất');
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
