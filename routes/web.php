<?php

use App\Http\Controllers\Web\RegisterController;
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

Route::view('/', 'page.hero')->name('home');

Route::controller(RegisterController::class)->group(function () {
    Route::get('/cadastro', 'index')->name('register.index');
    Route::post('/cadastro', 'store')->name('register.store');
    Route::get('/cadastro-finalizado', 'success')->name('register.success');
});
