<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chitietmuontra extends Model
{
    use HasFactory;
    protected $table = 'chitietmuontras';
    protected $fillable = ['muontra_id', 'sach_id', 'ngay_tra','tinh_trang_sach'];
    public function sach()
    {
        return $this->belongsTo(Sach::class, 'sach_id', 'id');
    }
}
