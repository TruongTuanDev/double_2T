<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_compn',
        'description',
        'logo',
        'background',
        'slodan',
        'treatment',
        'website',
        'address',
        'staff_number',
        'id_user',
        'job_quantity',
        'status'
    ];
    protected $table = 'employers';
    protected $primaryKey = 'id_emp';

    public function users() {
        return $this->belongsTo(User::class, 'id','id_user');
    }
    public function posts(){
        return $this->hasMany(Post::class,'id_emp','id_emp');
    }
    public function news(){
        return $this->hasMany(News::class,'id_emp','id_emp');
    }
    public function follows(){
        return $this->hasMany(Follow::class,'id_emp','employer_id_emp');
    }
    public function studentFollows(){
        return $this->belongsToMany(Student::class,'follow','employer_id_emp','student_id_stu');
    }
}
