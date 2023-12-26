<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favjob extends Model
{
    protected $fillable=['post_id_post','student_id_stu','status'];
    
    protected $table = 'jobfav_student'; 

    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
