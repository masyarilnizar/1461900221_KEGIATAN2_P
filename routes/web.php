<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller0221;

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

Route::get('anggota0221', [Controller0221::class, 'anggota']);
Route::get('buku0221', [Controller0221::class, 'buku']);
Route::get('kategori0221', [Controller0221::class, 'kategori']);
Route::get('home0221', [Controller0221::class, 'home']);
