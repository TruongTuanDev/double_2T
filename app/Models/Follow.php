<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $fillable=['employer_id_emp','student_id_stu','status'];
    
    protected $table = 'follow'; 
    public function companys(){
        return $this->belongsTo(Employer::class,'employer_id');
    }
}
