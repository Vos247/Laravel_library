<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Nhanvien extends Authenticatable
{
    protected $table = 'nhanviens';
    protected $primaryKey = 'id';

    protected $fillable = [
        'ho_ten',
        'email',
        'mat_khau',
    ];

    protected $hidden = [
        'mat_khau',
    ];

    public function getAuthPassword()
    {
        return $this->mat_khau; // Trả về cột mật khẩu tùy chỉnh
    }
}





