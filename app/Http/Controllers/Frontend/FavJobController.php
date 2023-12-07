<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Cart;
use App\Models\Favjob;
use App\Models\Post;
use Illuminate\Support\Str;
use Helper;
class FavJobController extends Controller
{
    protected $post=null;
    public function __construct(Post $post){
        $this->post=$post;
    }
    public function addToCart(Request $request){
        $student_id = auth()->user()->id;
        $post_id = $request->input('id');
        $data['student_id'] = $student_id;
        $data['post_id'] = $post_id;
        $status=Favjob::create($data);
        if($status){
            request()->session()->flash('success','Đã thêm công việc vào danh sách yêu thích');
        }
        else{
            request()->session()->flash('error','Thêm thất bại');
        }  
    } 
}
