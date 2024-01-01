<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $fillable=['user_id','news_id_news','comment','replied_comment','parent_id','status'];
    protected $table = 'comments'; 

    public function user_info(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public static function getAllComments(){
        return PostComment::with('user_info.students')->get();
    }

    public static function getAllUserComments(){
        return PostComment::where('user_id',auth()->user()->id)->with('user_info')->paginate(10);
    }

    public function post(){
        return $this->belongsTo(Post::class,'news_id','id_news');
    }

    public function replies(){
        return $this->hasMany(PostComment::class,'parent_id')->where('status','active');
    }
}
