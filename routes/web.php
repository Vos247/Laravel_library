<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NguoidungController;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VitriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacgiaController;
use App\Http\Controllers\SachController;
use App\Http\Controllers\NhaxuatbanController;
use App\Http\Controllers\TheloaiController;
use App\Http\Controllers\MuontraController;
use App\Http\Controllers\NgonnguController;
use App\Http\Controllers\ChitietmuontraController;
use App\Http\Controllers\ThongkeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\GioithieuController;
use App\Http\Controllers\ChitietController;
use App\Http\Controllers\LichsuController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::resource() là một phương thức giúp bạn định nghĩa nhanh tất cả các route cần thiết cho một tài nguyên (resource). 
Route::get('/', [HomeController::class, 'index']);

Route::group(['middleware' => 'auth:nhanvien'], function () {
Route::get('/admin', [DashboardController::class, 'index'])->name('Dashboard');
Route::get('/nguoidung/search', [NguoidungController::class, 'search'])->name('nguoidung.search');
Route::resource('/nguoidung', NguoidungController:: class);

Route::get('/sach/search', [sachController::class, 'search'])->name('sach.search');
Route::post('sach/upload', [sachController::class, 'imageUpload'])->name('sach.upload');
Route::resource('/sach', SachController:: class);

Route::get('/tacgia/search', [TacgiaController::class, 'search'])->name('tacgia.search');
Route::resource('/tacgia', TacgiaController:: class);

Route::get('nhaxuatban/search', [NhaxuatbanController::class, 'search'])->name('nhaxuatban.search');
Route::resource('nhaxuatban', NhaxuatbanController::class);

Route::get('/theloai/search', [theloaiController::class, 'search'])->name('theloai.search');
Route::resource('/theloai', TheloaiController:: class);

Route::get('/vitri/search', [VitriController::class, 'search'])->name('vitri.search');
Route::resource('/vitri', VitriController:: class);

Route::get('/ngonngu/search', [NgonnguController::class, 'search'])->name('ngonngu.search');
Route::resource('/ngonngu', NgonnguController:: class);

Route::get('/muontra/search', [MuontraController::class, 'search'])->name('muontra.search');
Route::resource('/muontra', MuontraController:: class);

Route::get('/nhanvien/search', [NhanvienController::class, 'search'])->name('nhanvien.search');
Route::resource('/nhanvien', NhanvienController:: class);

Route::get('/chitietmuontra', [ChitietmuontraController::class, 'index']);
Route::get('/chitietmuontra/create', [ChitietmuontraController::class, 'create']);

Route::get('/thongke', [ThongkeController::class, 'index'])->middleware('auth')->name('thongke.index');
Route::get('/thongke/search', [ThongkeController::class,'search'])->name('thongke.search');
Route::delete('/thongke/{id}', [ThongkeController::class, 'destroy'])->name('thongke.destroy');
Route::get('/thongke/luu', [ThongkeController::class, 'thongke'])->middleware('auth')->name('thongke.luu');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/lichsu', [LichsuController::class, 'index'])->name('lichsu');
    Route::post('/giahan/{id}', [LichSuController::class, 'giahan'])->name('giahan');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/chitiet', [ChitietController::class, 'index'])->name('chitiet');
    Route::get('/chitiet/{id}', [ChitietController::class, 'show'])->name('sach.chitiet');
    Route::post('/chitiet/{sachId}/muon', [ChitietController::class, 'muonSach'])->name('sach.muon');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/gioithieu',[GioithieuController::class, 'index'])->name('gioithieu');
Route::get('/tintuc', [TintucController::class, 'index'])->name('tintuc');
Route::get('/search', [HomeController::class, 'search'])->name('search');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});




