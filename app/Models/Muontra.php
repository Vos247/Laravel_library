<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Muontra extends Model
{
    use HasFactory;
    protected $table = 'muontras';
    protected $fillable = ['sach_id','nguoidung_id', 'ngay_muon', 'han_tra','trang_thai','ghi_chu'];
    public function nguoidung()
    {
        return $this->belongsTo(Nguoidung::class, 'nguoidung_id');
    }

    public function sach()
    {
        return $this->belongsTo(Sach::class, 'sach_id');
    }
    public function chitietmuontra()
{
    return $this->hasMany(Chitietmuontra::class, 'muontra_id');
}

protected static function boot()
{
    parent::boot();

    static::updated(function ($muontra) {
        // Kiểm tra nếu thuộc tính 'trang_thai' đã bị thay đổi
        if ($muontra->wasChanged('trang_thai') && $muontra->trang_thai == 1) {
            // Tìm sách dựa trên 'sach_id' từ bản ghi mượn trả
            $sach = Sach::find($muontra->sach_id);
            // Nếu sách tồn tại, tăng số lượng sách 'con_lai' lên 1 và lưu lại
            if ($sach) {
                $sach->con_lai += 1;
                $sach->save();
            }
        }
    });
}

}
