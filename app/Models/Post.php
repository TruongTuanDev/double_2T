<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Post extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'id_post';
    protected $fillable = [
        'title',
        'post_date',
        'quantity',
        'description',
        'exp_date',
        'requirement',
        'salary',
        'address',
        'position',
        'status',
        'id_emp',
        'id_major',
        'traffic_volume'
    ];
    protected $table = 'posts'; 

    public function companys() {
        return $this->belongsTo(Employer::class, 'id_emp','id_emp');
    }
}
