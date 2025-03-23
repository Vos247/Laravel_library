<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;

    protected $table = 'sachs';

    protected $fillable = [
        'tieu_de', 'tacgia_id', 'theloai_id', 'isbn', 'nam_xuat_ban',
        'so_luong', 'con_lai', 'vitri_id', 'ngonngu_id', 'nhaxuatban_id', 'image','hien_trang'
    ];

    // Quan hệ với tác giả
    public function tacGia()
    {
        return $this->belongsTo(TacGia::class, 'tacgia_id');
    }
    // Quan hệ với thể loại
    public function theLoai()
    {
        return $this->belongsTo(TheLoai::class, 'theloai_id');
    }
    public function viTri()
    {
        return $this->belongsTo(Vitri::class, 'vitri_id');
    }
    public function ngonNgu()
    {
        return $this->belongsTo(Ngonngu::class, 'ngonngu_id');
    }
    public function nhaxuatBan()
    {
        return $this->belongsTo(Nhaxuatban::class, 'nhaxuatban_id');
    }
    public function muontras()
    {
        return $this->hasMany(Muontra::class, 'sach_id');
    }

    public static function boot()
{
    parent::boot();
    static::saving(function ($sach) {
        // Kiểm tra nếu số lượng sách 'con_lai' bằng 0
        if ($sach->con_lai == 0) {
            // Nếu hết sách, cập nhật trạng thái 'hien_trang' thành 'Tạm hết'
            $sach->hien_trang = 'Tạm hết';
        } else {
            // Nếu còn sách, cập nhật trạng thái 'hien_trang' thành 'Còn'
            $sach->hien_trang = 'Còn';
        }
    });
}
}

