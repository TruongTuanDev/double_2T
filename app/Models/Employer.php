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
        'slogan',
        'treatment',
        'website',
        'address',
        'scale',
        'id_user',
    ];
    protected $table = 'employers';
    protected $primaryKey = 'id_emp';

    
}
