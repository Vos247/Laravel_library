<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhaxuatban extends Model
{
    use HasFactory;
    protected $table = "nhaxuatbans";
    protected $fillable = [
        'ten_nha_xuat_ban',
        'dia_chi',
        'so_dien_thoai',
        'email',
        'website'
    ];
}
