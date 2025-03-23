<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vitri extends Model
{
    use HasFactory;
    protected $table = 'vitris';

    protected $fillable = [
        'ten_vi_tri',
        'mo_ta'
    ];
}
