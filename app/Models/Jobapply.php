<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    protected $fillable=['post_id_post','student_id_stu','email','file_CV','message','status'];
    protected $table = 'student_job';
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
   
}
