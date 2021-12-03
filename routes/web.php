<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SenderController;
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
    return view('home');
})->name('home');

Route::get('/reg', function () {
    return view('reg');
})->name('reg');

Route::get('/admin', [SenderController::class, 'reader'])->name('reader');

Route::post('/reg/submit', [SenderController::class, 'sender'])->name('submiter');

route::get('/admin/deleter{id}', [SenderController::class, 'deletePartis'])->name('deleter');
