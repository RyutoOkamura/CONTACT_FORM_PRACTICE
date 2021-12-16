<?php

use App\Http\Controllers\ContactsController;
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

Route::get('/', [ContactsController::class, 'index'])->name('contact');
Route::post('/confirm', [ContactsController::class, 'confirm']);
Route::post('/process', [ContactsController::class, 'process']);
Route::get('/complete', [ContactsController::class, 'complete'])->name('complete');
