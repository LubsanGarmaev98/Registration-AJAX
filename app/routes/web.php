<?php

use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('registration', [UserController::class, 'create'])->name('create');
Route::post('registration', [UserController::class, 'store'])->name('registration');

Route::middleware('auth')->get('dashboard', [UserController::class, 'dashboard']);
