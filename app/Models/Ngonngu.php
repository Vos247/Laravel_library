<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ngonngu extends Model
{
    use HasFactory;
    protected $table = 'ngonngus';
    protected $fillable = ['ten_ngon_ngu'];
}
