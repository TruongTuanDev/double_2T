<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'university',
        'major',
        'birthday',
        'avatar',
        'description',
        'id_user',
    ];
    protected $table = 'students';
    protected $primaryKey = 'id_stu';

    public function users() {
        return $this->belongsTo(User::class, 'id','id_stu');
    }
    public function applyPosts()
    {
        return $this->belongsToMany(Post::class,'student_job','student_id_stu','post_id_post'); 
    }
    public function favoritePosts()
    {
        return $this->belongsToMany(Post::class,'jobfav_student','student_id_stu','post_id_post'); 
    }
    
}
