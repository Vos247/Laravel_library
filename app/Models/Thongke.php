<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thongke extends Model
{
    use HasFactory;
    protected $table = 'thongkes';
    protected $fillable = ['loai_thong_ke', 'noi_dung_thong_ke', 'sach_id', 'nguoidung_id'];
    public function sach()
{
    return $this->belongsTo(Sach::class, 'sach_id');
}

public function nguoidung()
{
    return $this->belongsTo(Nguoidung::class, 'nguoidung_id');
}
public function chitietmuontras()
{
    return $this->hasManyThrough( // hasManyThrough dùng để trung gian qua nhiều bảng 
        Chitietmuontra::class, // Model chi tiết mượn trả
        Muontra::class,       // Model mượn trả
        'nguoidung_id',       // Khóa ngoại trong bảng muontras trỏ đến bảng nguoidungs
        'muontra_id',         // Khóa ngoại trong bảng chitietmuontras trỏ đến bảng muontras
        'nguoidung_id',       // Khóa chính trong bảng thongkes trỏ đến nguoidung_id
        'id'            // Khóa chính trong bảng muontras
    );
}

}
