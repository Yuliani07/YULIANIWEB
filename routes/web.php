<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContohController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\bayarController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hii/panggilan/{nama}", [ContohController::class, "hii"])->name("hii");

Route::get('/yuliani', function() {
    echo "yuli";
});

Route::get('/yuli', function () {
    return view('yuli');
})->name("home");

Route::get('/yuliani', function () {
    return view('yuliani');
})->name("about");

Route::get('/putri', function () {
    return view('putri');
})->name("contact");

Route::get('/my-education', function () {
    return view('education');
})->name("pendidikan");

Route::get('/my-course', function () {
    return view('course');
})->name("kursus");

Route::get("/tampil-user",[UserController::class,"tampil"])->name("user_all");;
Route::get("/input-user",[UserController::class,"formInput"])->name("user_input");;
Route::post("/simpan-user",[UserController::class,"simpan"])->name("user_simpan");;

Route::get("/edit-user/{id}",[UserController::class,"formEdit"])->name("user_edit");;
Route::put("/update-user/{id}",[UserController::class,"update"])->name("user_update");;
Route::delete("/hapus-user/{id}",[UserController::class,"hapus"])->name("user_hapus");;

Route::get("/tampil-user/{id}",[UserController::class,"show"])->name("user_show");;
Route::get("/login", [SecurityController::class, "formLogin"])->name("login");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");

    Route::get("pemesanan/buat", [PemesananController::class, 'buat'])->name("buat_pemesanan");
    Route::post("pemesanan/simpan", [PemesananController::class, 'simpan'])->name("simpan_pemesanan");
    Route::get("pemesanan/tampil/{id}", [PemesananController::class, 'tampil'])->name("tampil_pemesanan");
    Route::get("pemesanan/semua", [PemesananController::class, 'semua'])->name("semua_pemesanan");
    Route::get("pemesanan/ubah/{id}", [PemesananController::class, 'ubah'])->name("ubah_pemesanan");
    Route::put("pemesanan/update/{id}", [PemesananController::class, 'update'])->name("update_pemesanan");
    Route::delete("pemesanan/hapus/{id}", [PemesananController::class, 'hapus'])->name("hapus_pemesanan");

    Route::get("kategori/buat", [KategoriController::class, 'buat'])->name("buat_kategori");
    Route::post("kategori/simpan", [KategoriController::class, 'simpan'])->name("simpan_kategori");
    Route::get("kategori/tampil/{id}", [KategoriController::class, 'tampil'])->name("tampil_kategori");
    Route::get("kategori/semua", [KategoriController::class, 'semua'])->name("semua_kategori");
    Route::get("kategori/ubah/{id}", [KategoriController::class, 'ubah'])->name("ubah_kategori");
    Route::put("kategori/update/{id}", [KategoriController::class, 'update'])->name("update_kategori");
    Route::delete("kategori/hapus/{id}", [KategoriController::class, 'hapus'])->name("hapus_kategori");

    Route::get("Menu/buat", [MenuController::class, 'buat'])->name("buat_Menu");
    Route::post("Menu/simpan", [MenuController::class, 'simpan'])->name("simpan_Menu");
    Route::get("Menu/tampil/{id}", [MenuController::class, 'tampil'])->name("tampil_Menu");
    Route::get("Menu/semua", [MenuController::class, 'semua'])->name("semua_Menu");
    Route::get("Menu/ubah/{id}", [MenuController::class, 'ubah'])->name("ubah_Menu");
    Route::put("Menu/update/{id}", [MenuController::class, 'update'])->name("update_Menu");
    Route::delete("Menu/hapus/{id}", [MenuController::class, 'hapus'])->name("hapus_Menu");

    Route::get("bayar/buat", [bayarController::class, 'buat'])->name("buat_bayar");
    Route::post("bayar/simpan", [bayarController::class, 'simpan'])->name("simpan_bayar");
    Route::get("bayar/tampil/{id}", [bayarController::class, 'tampil'])->name("tampil_bayar");
    Route::get("bayar/semua", [bayarController::class, 'semua'])->name("semua_bayar");
    Route::get("bayar/ubah/{id}", [bayarController::class, 'ubah'])->name("ubah_bayar");
    Route::put("bayar/update/{id}", [bayarController::class, 'update'])->name("update_bayar");
    Route::delete("bayar/hapus/{id}", [bayarController::class, 'hapus'])->name("hapus_bayar");