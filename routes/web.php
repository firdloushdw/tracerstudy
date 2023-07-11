<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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

Route::controller(HomeController::class)->group(function(){
	Route::get('/', 'index')->name('home');
	Route::prefix('/berita')->group(function(){
		Route::get('/', 'berita')->name('berita');
		Route::get('/show/{id}', 'beritaShow');
	});
	Route::prefix('/informasi-karir')->group(function(){
		Route::get('/', 'karir')->name('karir');
		Route::get('/show/{id}', 'karirShow');
	});
	Route::prefix('/legalisasi-online')->group(function(){
		Route::get('/', 'legalisasi')->name('legalisasi');
		Route::get('/pengajuan', 'pengajuanLegalisasi')->name('pengajuan.legalisasi');
		Route::post('/pengajuan', 'storepengajuanLegalisasi');
		Route::get('/konfirmasi', 'konfirmasilegalisasi')->name('konfirmasi.legalisasi');
		Route::get('/pengajuan/tambah', 'tambahpengajuanLegalisasi')->name('pengajuan.legalisasi.tambah');
		Route::post('/tambah', 'storepengajuanLegalisasi2')->name('pengajuan.legalisasi.store');
	});
});
Route::controller(AuthController::class)->group(function(){
	Route::get('/login', 'index')->name('user.login');
	Route::post('/login', 'processLogin');
	Route::get('/login/tracer-study', 'pageLogin')->name('user.pagelogin');
	Route::post('/login/tracer-study', 'pageLoginProcess');
	Route::get('/logout', 'logout')->name('logout');
});
Route::controller(AdminController::class)->group(function(){
	Route::prefix('/admin')->group(function(){
		Route::get('/', 'dashboard')->name('admin');
		Route::get('/dashboard', 'dashboard')->name('admin.dashboard');
		Route::prefix('/informasi-karir')->group(function(){
			Route::get('/', 'karir')->name('admin.karir');
			Route::post('/', 'storekarir');
			Route::get('/delete/{id}', 'karirdelete');
		});
		Route::prefix('/legalisasi-online')->group(function(){
			Route::get('/', 'legalisasi')->name('admin.legalisasi');
			Route::get('/{id}', 'konfirmasisselesailegalisasi');
		});
		Route::prefix('/berita')->group(function(){
			Route::get('/', 'berita')->name('admin.berita');
			Route::post('/', 'storeberita');
			Route::get('/delete/{id}', 'beritadelete');
			Route::get('/show/{id}', 'beritashow');
		});
		Route::prefix('/pengaturan')->group(function(){
			Route::get('/', 'pengaturan')->name('admin.pengaturan');
			Route::post('/', 'storepengaturan');
		});
		Route::prefix('/kuesioner-tracer-study')->group(function(){
			Route::get('/', 'kuesioner')->name('admin.kuesioner');
			Route::post('/', 'storekuesioner');
			Route::get('/{id}', 'aktifkankuesioner');
			Route::get('/delete/{id}', 'deletekuesioner');
			Route::get('/tambah/{id}', 'tambahpertanyaan');
			Route::post('/tambah/{id}', 'storetambahpertanyaan');
			Route::get('/delete/pertanyaan/{id}', 'deletepertanyaan');
			Route::get('/show/{text}', 'showkuesioner');
			Route::post('/show/{text}', 'storetambahpertanyaan');
		});
		Route::prefix('/data-alumni')->group(function(){
			Route::get('/', 'dataalumni')->name('admin.alumni');
			Route::post('/', 'storealumni');
			Route::get('/excel', 'dataalumniexcel')->name('admin.alumni.excel');
			Route::get('/pdf', 'dataalumnipdf')->name('admin.alumni.pdf');
		});
		Route::prefix('/hasil-tracer-study')->group(function(){
			Route::get('/', 'tracerstudy')->name('admin.tracer.study');
			Route::get('/excel', 'tracerstudyexcel')->name('admin.tracerstudy.excel');
			Route::get('/pdf', 'tracerstudypdf')->name('admin.tracerstudy.pdf');
		});
	});
});