<?php

use App\Http\Controllers\change;
use App\Http\Controllers\login;
use App\Http\Controllers\main;
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

Route::get('/', [main::class, 'index']);

Route::get('/list', [main::class, 'list']);

Route::get('/history', [main::class, 'history']);

Route::get('/history/in', [main::class, 'hisin']);

Route::get('/history/out', [main::class, 'hisout']);

Route::get('/login', [login::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [login::class, 'auth']);
Route::post('/logout', [login::class, 'logout']);

Route::group(['middleware' => ['auth', 'checklevel:admin,operator,user']], function () {
    Route::get('/profile/{username}', [main::class, 'profile'])->name('auth.profile');
    Route::get('/profile/{username}/edit', [main::class, 'profiledit'])->name('auth.edit');
    Route::put('/profile/{username}', [main::class, 'update']);
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/crud', [main::class, 'add'])->name('add');
    Route::post('/crud', [main::class, 'store'])->name('store_barang');
    Route::delete('/list/{id}', [change::class, 'destroy'])->name('destroy');
    Route::get('/list/{id}/edit', [change::class, 'edit'])->name('edit');
    Route::put('/list/{id}', [change::class, 'update']);
});

Route::group(['middleware' => ['auth', 'checklevel:operator']], function () {
    Route::get('/history/edit', [main::class, 'edit'])->name('edit');
});