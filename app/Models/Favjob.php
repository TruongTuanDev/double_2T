<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favjob extends Model
{
    protected $fillable=['post_id','student_id','status'];
    
    protected $table = 'favjobs'; 

    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
