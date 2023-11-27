<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
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
    protected $primaryKey = 'id_emp';

    
}
