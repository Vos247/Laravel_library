<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tacgia extends Model
{
    use HasFactory;
    protected $table = 'tacgias';
    protected $fillable = ['ten_tac_gia', 'ngay_sinh','quoc_tich','tieu_su'];
    public function sachs()
    {
        return $this->hasMany(Sach::class, 'tacgia_id');
    }
}
