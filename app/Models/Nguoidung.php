<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Kế thừa để dùng Auth
use Illuminate\Notifications\Notifiable;

class Nguoidung extends Authenticatable
{
    use Notifiable;

    protected $table = 'nguoidungs'; // Bảng trong database
    protected $fillable = [
        'ho_ten',
        'email',
        'mat_khau',
        'so_dien_thoai',
        'dia_chi',
        'ngay_dang_ky',
        'ngay_het_han'
    ];

    protected $hidden = [
        'mat_khau', // Ẩn mật khẩu khi trả về JSON
    ];

    public function getAuthPassword()
    {
        return $this->mat_khau;
    }

}

