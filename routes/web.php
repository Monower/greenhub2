<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('signup', function(){
    return view('signup');
})->name('signup');

Route::post('signup', [AuthController::class, 'signup'])->name('user.signup');
Route::post('login', [AuthController::class, 'login'])->name('user_login');

Route::name('user.')->prefix('user')->middleware('auth')->group(function(){
    Route::get('/dashboard/{id?}', [UserController::class,'dashboard'])->name('dashboard');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('info-update',[UserController::class, 'info_update'])->name('info_update');
});