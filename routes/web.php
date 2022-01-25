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
    Route::get('/createsurat', 'SuratController@create', function(){});
    Route::post('/createsurat/post', 'SuratController@store', function(){});
    Route::get('/createpegawai', 'PegawaiController@create', function(){});
    Route::post('/createpegawai/post', 'SuratController@store', function(){});
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
