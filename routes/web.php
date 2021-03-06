<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'SuratController@index');
// Route::get('/listsurat', 'SuratController@list');
// Route::get('/createsurat', 'SuratController@create');
// Route::post('/createsurat/post', 'SuratController@store');
Route::get('surat/cetakpdf/{surat_id}', 'SuratController@print');
Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/', 'SuratController@index', function(){});
    Route::get('/listsurat', 'SuratController@list', function(){});
    Route::get('/listpegawai', 'PegawaiController@list', function(){});
    Route::get('/createsurat', 'SuratController@create', function(){});
    Route::post('/createsurat/post', 'SuratController@store', function(){});
    Route::get('/createpegawai', 'PegawaiController@create', function(){});
    Route::post('/createpegawai/post', 'PegawaiController@store', function(){});
    Route::get('/pegawai/{pegawai_id}/edit', 'PegawaiController@edit', function(){});
    Route::put('/pegawai/{pegawai_id}', 'PegawaiController@update', function(){});
    Route::delete('/pegawai/{pegawai_id}', 'PegawaiController@destroy', function(){});
    Route::get('/createkerja', 'KerjaController@create', function(){});
    Route::post('/createkerja/post', 'KerjaController@store', function(){});
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
