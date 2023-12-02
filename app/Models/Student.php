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
    
}
