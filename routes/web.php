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

Route::get('/', function () {
    $pipes = \App\Models\Pipes::all();
    $alerts = \App\Models\Alert::all();

    return view('welcome', compact('pipes', 'alerts'));
})->name('dashboard');

Route::resource('user', \App\Http\Controllers\UserController::class);
Route::resource('pipe', \App\Http\Controllers\PipeController::class);
