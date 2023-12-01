<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EAuthController extends Controller
{
    public function index(){
        $config = $this->config();
        $template = "frontend.auth.employer.pages.register";
        return view('frontend.auth.layout',compact('config', 'template'));
    }
    public function loginForm(){
        $config = $this->config();
        $template = "frontend.auth.employer.pages.login";
        return view('frontend.auth.layout',compact('config','template'));
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
        if (Employer::where('email', $request->email)->exists() && Employer::where('password', $request->password)) {
            if (Auth::guard('employer')->attempt($credentials)) {
                return redirect()->route('dashboard.employer')->with('success', 'Đăng nhập thành công');
            }
        }
        return redirect()->route('employer.login')->with('error','Email hoặc mật khẩu không chính xác');
    }
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name_compn'=>'string|required',
            'password'=>'string|required',
            're_password'=>'string|required|same:passw ord',
            'phonenumber'=>'string|required|',
            'email'=>'string|required|unique:employers',
            'website'=>'string|required|',
            'address'=>'string',
        ]);
        $data=$request->all();
        $data['password']=Hash::make($request->password);
        $status=Employer::create($data);
        if($status){
            request()->session()->flash('success','Đăng ký thành công');
        }
        else{
            request()->session()->flash('error','Đăng ký thất bại');
        }
        return redirect()->route('employer.login');

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
        
            return redirect()->route('employer.login')->with('info','Bạn đã đăng xuất');
        }
    
}
