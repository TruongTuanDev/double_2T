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
        'scale',
        'id_user',
    ];
    protected $table = 'employers';
    protected $primaryKey = 'id_emp';

    public function users() {
        return $this->belongsTo(User::class, 'id','id_emp');
    }
    public function posts(){
        return $this->hasMany(Post::class,'id_emp','id_emp');
    }
    
}
