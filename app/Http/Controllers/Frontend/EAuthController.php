<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

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
        if (User::where('email', $request->email)->exists() && User::where('password', $request->password)) {
            if (Auth::attempt($credentials)) {
                    $iduser = Auth()->id();
                    return redirect()->route('employer.dashboard')->with(['success', 'Đăng nhập thành công']+ compact('iduser'));
            }
        }
        return redirect()->route('employer.login')->with('error','Email hoặc mật khẩu không chính xác');
    }
    public function register(Request $request)
    {
        $this->validate($request,
        [
            'name'=>'string|required',
            'role' => 'string|in:admin,user,employer',
            'phone'=>'string|required',
            'password'=>'string|required',
            're_password'=>'string|required|same:password',
            'email'=>'string|required|unique:users',
            'address'=>'string',
        ]);
        $data=$request->all();
        $data['password']=Hash::make($request->password);
        $data['role'] = 'employer';
        $data['status'] = 'active';
        $status=User::create($data);
        if($status){
            $id_user=$status->id;
            $datadetail['id_user']=$id_user;
            $datadetail['job_quantity']=0;
            $datadetail['status']='inactive';
            $employer=Employer::create($datadetail);
            if($employer){
                request()->session()->flash('success','Đăng ký thành công nhà tuyển dụng');
            }
        }
        else{
            request()->session()->flash('error','Đăng ký thất bại');
        }
        return redirect()->route('employer.login');

    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name_compn'=>'string|required',
            'password'=>'string|required',
            're_password'=>'string|required|same:password',
            'phonenumber'=>'string|required|',
            'email'=>'string|required|unique:employers',
            'website'=>'string|required|',
            'address'=>'string',
        ]);
        $data=$request->all();
        $data['password']=Hash::make($request->password);
        $status=Employer::create($data);
        if($status){
            event(new Registered($user));
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
