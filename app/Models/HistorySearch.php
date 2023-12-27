<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorySearch extends Model
{
    use HasFactory;
    protected $fillable = [
      'data_search',
      'province_id'
    ];
    protected $table = 'history_search';
   
}
