<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_news';
    protected $fillable = [
        'id_news',
        'title',
        'content',
        'description',
        'image',
        'create_date',
        'view',
        'slug',
        'id_emp',
        'status',
    ];
    protected $table = 'news';
    public function company(){
        return $this->belongsTo(Employer::class,'id_emp','id_emp');
    }
    public function user_info(){
        return $this->hasOne(User::class,'id','user_id');
    }
    public function author_info(){
        return $this->hasOne(Employer::class,'id_emp','id_emp');
    }
    public static function getAllPost(){
        return News::with('author_info')->orderBy('id','DESC')->paginate(10);
    }
  
    public static function getPostBySlug($slug){
        return News::with('author_info')->where('slug',$slug)->where('status','active')->first();
    }

    public function comments(){
        return $this->hasMany(PostComment::class)->whereNull('parent_id')->where('status','active')->with('user_info')->orderBy('id','DESC');
    }
    public function allComments(){
        return $this->hasMany(PostComment::class)->where('status','active');
    }
   
    public static function countActivePost(){
        $data=News::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
