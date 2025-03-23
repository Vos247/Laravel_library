<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('nguoidungs', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('email')->unique()->nullable();
            $table->string('mat_khau')->nullable();
            $table->string('so_dien_thoai', 15)->nullable();
            $table->text('dia_chi')->nullable();
            $table->date('ngay_dang_ky')->default(DB::raw('CURDATE()'));
            $table->date('ngay_het_han')->nullable();
            $table->timestamps();
        });
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('email')->unique()->nullable();
            $table->string('so_dien_thoai', 15)->nullable();
            $table->string('vai_tro')->nullable();
            $table->string('mat_khau')->nullable();
            $table->foreignId('nguoidung_id')->constrained('nguoidungs')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('ngonngus', function (Blueprint $table) {
            $table->id();
            $table->string('ten_ngon_ngu')->unique();
            $table->timestamps();
        });
        Schema::create('theloais', function (Blueprint $table) {
            $table->id();
            $table->string('ten_the_loai')->unique();
            $table->timestamps();
        });
        Schema::create('vitris', function (Blueprint $table) {
            $table->id();
            $table->string('ten_vi_tri')->unique();
            $table->text('mo_ta')->nullable();
            $table->timestamps();
        });
        Schema::create('nhaxuatbans', function (Blueprint $table) {
            $table->id();
            $table->string('ten_nha_xuat_ban');
            $table->text('dia_chi')->nullable();
            $table->string('so_dien_thoai', 15)->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
        });
        Schema::create('tacgias', function (Blueprint $table) {
            $table->id();
            $table->string('ten_tac_gia');
            $table->date('ngay_sinh')->nullable();
            $table->string('quoc_tich', 100)->nullable();
            $table->text('tieu_su')->nullable();
            $table->timestamps();
        });
        Schema::create('sachs', function (Blueprint $table) {
            $table->id();
            $table->string('tieu_de');
            $table->foreignId('tacgia_id')->constrained('tacgias')->onDelete('cascade');
            $table->foreignId('theloai_id')->constrained('theloais')->onDelete('cascade');
            $table->string('isbn', 13)->unique()->nullable();
            $table->integer('nam_xuat_ban')->nullable();
            $table->integer('so_luong')->default(1);
            $table->integer('con_lai')->default(1);
            $table->foreignId('vitri_id')->nullable()->constrained('vitris')->onDelete('set null');
            $table->foreignId('ngonngu_id')->nullable()->constrained('ngonngus')->onDelete('set null');
            $table->foreignId('nhaxuatban_id')->nullable()->constrained('nhaxuatbans')->onDelete('set null');
            $table->string('image')->nullable();
            $table->string('hien_trang')->nullable();
            $table->timestamps();
        });
        Schema::create('muontras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('nguoidung_id')->constrained('nguoidungs')->onDelete('cascade');
            $table->foreignId('sach_id')->nullable()->constrained('sachs')->onDelete('set null');
            $table->date('ngay_muon')->default(DB::raw('CURDATE()'));
            $table->date('han_tra')->nullable();
            $table->date('ngay_tra')->nullable();
            $table->string('trang_thai')->nullable();
            $table->string('ghi_chu')->nullable(); 
            $table->timestamps();
        });        
        Schema::create('chitietmuontras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('muontra_id')->constrained('muontras')->onDelete('cascade');
            $table->foreignId('sach_id')->constrained('sachs')->onDelete('cascade');
            $table->date('ngay_tra')->nullable();
            $table->string('tinh_trang_sach', 255)->default('Tốt');
            $table->timestamps();
        });
        Schema::create('thongkes', function (Blueprint $table) {
            $table->id();
            $table->string('loai_thong_ke');
            $table->text('noi_dung_thong_ke')->nullable();
            $table->foreignId('sach_id')->nullable()->constrained('sachs')->onDelete('cascade');
            $table->foreignId('nguoidung_id')->nullable()->constrained('nguoidungs')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('thongkes');
        Schema::dropIfExists('chitietmuontras');
        Schema::dropIfExists('muontras');
        Schema::dropIfExists('sachs');
        Schema::dropIfExists('tacgias');
        Schema::dropIfExists('nhaxuatbans');
        Schema::dropIfExists('vitris');
        Schema::dropIfExists('theloais');
        Schema::dropIfExists('ngonngus');
        Schema::dropIfExists('nhanviens');
        Schema::dropIfExists('nguoidungs');
    }
};
