<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        $config = $this->config();
        return view('backend.auth.login',compact('config'));
    }
    public function register(){
        $config = $this->config();
        $template = "backend.auth.home.register";
        return view('backend.auth.layout',compact('config', 'template'));
    }
    private function config(){
        return [
            'js' => [

            ],
            'css' => [

            ]
            ];
    }
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (User::where('email', $request->email)->exists() && User::where('password', $request->password)) {
            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard.index')->with('success', 'Đăng nhập thành công');
            }
        }
        return redirect()->route('admin.login')->with('error','Email hoặc mật khẩu không chính xác');
    }
    public function changePassword(){
        return view('backend.layouts.changePassword');
    }
    // public function changPasswordStore(Request $request)
    // {
    //     $request->validate([
    //         'current_password' => ['required', new MatchP],
    //         'new_password' => ['required'],
    //         'new_confirm_password' => ['same:new_password'],
    //     ]);

    //     User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

    //     return redirect()->route('admin')->with('success','Password successfully changed');
    // }
    public function logout(Request $request)
        {
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
        
            return redirect()->route('admin.login')->with('info','Bạn đã đăng xuất');
        }
    
}
