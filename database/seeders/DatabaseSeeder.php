<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Bảng nguoidungs: 10 dòng
        $nguoiDungs = [];
        for ($i = 1; $i <= 10; $i++) {
            $nguoiDungs[] = [
                'ho_ten' => "Người dùng $i",
                'email' => "user$i@gmail.com",
                'mat_khau' => bcrypt('password'),
                'so_dien_thoai' => "090000000$i",
                'dia_chi' => "Địa chỉ $i",
                'ngay_dang_ky' => now(),
            ];
        }
        foreach ($nguoiDungs as $nguoiDung) {
            DB::table('nguoidungs')->insert($nguoiDung);
        }

        // Bảng nhanviens: 10 dòng
        $nhanViens = [];
        for ($i = 1; $i <= 10; $i++) {
            $nhanViens[] = [
                'ho_ten' => "Nhân viên $i",
                'email' => "nhanvien$i@gmail.com",
                'mat_khau' => bcrypt('password'),
                'so_dien_thoai' => "091111111$i",
                'vai_tro' => $i % 2 == 0 ? 'Admin' : 'Nhân viên',
                'nguoidung_id' => $i,
            ];
        }
        foreach ($nhanViens as $nhanVien) {
            DB::table('nhanviens')->insert($nhanVien);
        }

        // Bảng ngonngus: 10 dòng
        $ngonNgus = [];
        for ($i = 1; $i <= 10; $i++) {
            $ngonNgus[] = ['ten_ngon_ngu' => "Ngôn ngữ $i"];
        }
        foreach ($ngonNgus as $ngonNgu) {
            DB::table('ngonngus')->insert($ngonNgu);
        }

        // Bảng theloais: 10 dòng
        $theLoais = [];
        for ($i = 1; $i <= 10; $i++) {
            $theLoais[] = ['ten_the_loai' => "Thể loại $i"];
        }
        foreach ($theLoais as $theLoai) {
            DB::table('theloais')->insert($theLoai);
        }

        // Bảng vitris: 10 dòng
        $viTris = [];
        for ($i = 1; $i <= 10; $i++) {
            $viTris[] = [
                'ten_vi_tri' => "Vị trí $i",
                'mo_ta' => "Mô tả vị trí $i",
            ];
        }
        foreach ($viTris as $viTri) {
            DB::table('vitris')->insert($viTri);
        }

        // Bảng nhaxuatbans: 10 dòng
        $nhaXuatBans = [];
        for ($i = 1; $i <= 10; $i++) {
            $nhaXuatBans[] = [
                'ten_nha_xuat_ban' => "Nhà xuất bản $i",
                'dia_chi' => "Địa chỉ $i",
                'so_dien_thoai' => "092222222$i",
                'email' => "nxb$i@gmail.com",
                'website' => "http://nxb$i.vn",
            ];
        }
        foreach ($nhaXuatBans as $nhaXuatBan) {
            DB::table('nhaxuatbans')->insert($nhaXuatBan);
        }

        // Bảng tacgias: 10 dòng
        $tacGias = [];
        for ($i = 1; $i <= 10; $i++) {
            $tacGias[] = [
                'ten_tac_gia' => "Tác giả $i",
                'ngay_sinh' => now()->subYears(20 + $i)->format('Y-m-d'),
                'quoc_tich' => "Quốc tịch $i",
                'tieu_su' => "Tiểu sử tác giả $i",
            ];
        }
        foreach ($tacGias as $tacGia) {
            DB::table('tacgias')->insert($tacGia);
        }

        // Bảng sachs: 10 dòng
        $sachs = [];
        for ($i = 1; $i <= 10; $i++) {
            $sachs[] = [
                'tieu_de' => "Sách $i",
                'tacgia_id' => $i,
                'theloai_id' => $i,
                'isbn' => str_pad($i, 13, '0', STR_PAD_LEFT),
                'nam_xuat_ban' => 2000 + $i,
                'so_luong' => 10 + $i,
                'con_lai' => 5 + $i,
                'vitri_id' => $i,
                'ngonngu_id' => $i,
                'nhaxuatban_id' => $i,
            ];
        }
        foreach ($sachs as $sach) {
            DB::table('sachs')->insert($sach);
        }
    }
}
