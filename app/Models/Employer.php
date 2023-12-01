<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
class Employer extends Model implements AuthenticatableContract
{
    use HasApiTokens, HasFactory, Notifiable , Authenticatable;
    protected $primaryKey = 'id_emp';
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'website',
        'name_compn',
        'password',
        'phone',
        'province_id',
        'district_id',
        'ward_id',
        'address',
        'birthday',
        'photo',
        'description',
        'status',
        'role',
        'ip'
    ];
    protected $table = 'employers';
     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
