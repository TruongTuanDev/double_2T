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
}
