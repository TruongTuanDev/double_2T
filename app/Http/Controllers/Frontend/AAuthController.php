<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Services\UserService;
use App\Models\Province;
use App\Models\Settings;
use App\Models\Student;
use App\Rules\MatchOldPassword;
use App\Services\DistrictService;
use App\Services\provinceService;
class AAuthController extends Controller
{
    public function loginForm(){
        $config = $this->config();
        $template = "frontend.auth.user.pages.login";
        return view('frontend.auth.layout',compact('config','template'));
    }
    public function index(){
        $config = $this->config();
        $template = "frontend.auth.user.pages.register";
        return view('frontend.auth.layout',compact('config','template'));
    }
    public function register(Request $request){
        
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
        $data['role'] = 'user';
        $data['status'] = 'active';
        $status=User::create($data);
        if($status){
            $id_user=$status->id;
            $datadetail['id_user']=$id_user;
            $student=Student::create($datadetail);
            request()->session()->flash('success','Đăng ký thành công');
            if($student){

            }else
            {
                
            }
        }
        else{
            request()->session()->flash('error','Đăng ký thất bại');
        }
        return redirect()->route('user.login');
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
                return redirect()->route('home')->with('success', 'Đăng nhập thành công');
            }
        }
        return redirect()->route('user.login')->with('error','Email hoặc mật khẩu không chính xác');
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
        
            return redirect()->route('user.login')->with('info','Bạn đã đăng xuất');
        }
    
}
