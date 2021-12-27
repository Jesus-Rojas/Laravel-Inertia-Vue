<?php

use App\Http\Controllers\NoteController;
use Illuminate\Foundation\Application;
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

Route::inertia('/', 'Welcome');

Route::inertia('/dashboard', 'Dashboard')
    ->middleware('auth:sanctum')
    ->name('dashboard');

Route::resource('/notes', NoteController::class)
    ->middleware('auth:sanctum');
