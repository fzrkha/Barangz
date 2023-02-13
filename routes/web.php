<?php

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

Route::get('/his-in', [main::class, 'hisin']);

Route::get('/his-out', [main::class, 'hisout']);
