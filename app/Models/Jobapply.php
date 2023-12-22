<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApply extends Model
{
    protected $fillable=['id_post','id_student','email','file_cv','message',];
    protected $table = 'jobapplys';
   
}
