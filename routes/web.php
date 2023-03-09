<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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

Route::get('/', function () {
    return view('index');
}); 

//route untuk data buku
Route::get('/buku', 'BukuController@bukutampil');
Route::post('/buku/tambah', 'BukuController@bukutambah');
Route::get('/buku/hapus/{id_buku}', 'BukuController@bukuhapus');
Route::put('/buku/edit/{id_buku}', 'BukuController@bukuedit');

//Route untuk data buku
Route::get('/home', function(){return view('view_home');});

//Route untuk data anggota
Route::get('/anggota', 'AnggotaController@anggotatampil');

//Route untuk data peminjaman
Route::get('/pinjam', 'PinjamController@pinjamtampil'); 