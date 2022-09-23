<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LegalitasController;

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

// Route::get('/', function () {
//     return view('front\index');
// });

Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/legalitas-perusahaan', [LegalitasController::class, 'index'])->name('legalitas.perusahaan.index');
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.us.index');