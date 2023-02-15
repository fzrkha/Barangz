<?php

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

Route::group(['middleware' => ['auth', 'checklevel:admin, operator, user']], function () {
    Route::get('/profile', [main::class, 'profile'])->name('auth.profile');
});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/crud', [main::class, 'add'])->name('add');
});

Route::group(['middleware' => ['auth', 'checklevel:operator']], function () {
    Route::get('/edit', [main::class, 'edit'])->name('edit');
});