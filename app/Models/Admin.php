<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
      'avatar'
    ];
    protected $table = 'admins';
    protected $primaryKey = 'id';
    public function users() {
        return $this->belongsTo(User::class, 'id','id_user');
    }
   
}
