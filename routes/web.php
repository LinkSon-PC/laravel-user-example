<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResultadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| php artisan make:controller nameController
*/

Route::view('/home','home')->name('home');

Route::get('resultado', [ResultadoController::class, 'index'])->name('resultado.index');
Route::get('resultado/create', [ResultadoController::class, 'create'])->name('resultado.create');
Route::post('resultado', [ResultadoController::class, 'store'])->name('resultado.store');
Route::get('resultado/{resultado}/edit', [ResultadoController::class, 'edit'])->name('resultado.edit');
Route::put('resultado/{resultado}', [ResultadoController::class, 'update'])->name('resultado.update');

Route::get('users/{id}', [HomeController::class, 'index']);

/* 
Route::get('estudiante', [EstudianteController::class, 'index'])->name('estudiante.index');
Route::get('estudiante/create', [EstudianteController::class, 'create'])->name('estudiante.create');
Route::get('estudiante/{estudiante}', [EstudianteController::class, 'show'])->name('estudiante.show');
Route::post('estudiante', [EstudianteController::class, 'store'])->name('estudiante.store');
Route::get('estudiante/{estudiante}/edit', [EstudianteController::class, 'edit'])->name('estudiante.edit');
Route::get('estudiante/{estudiante}', [EstudianteController::class, 'show'])->name('estudiante.show');
Route::delete('estudiante/{estudiante}', [EstudianteController::class, 'destroy'])->name('estudiante.destroy');
 */

Route::resource('estudiante', 'EstudianteController');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.index');
Route::post('login', [LoginController::class, 'login'])->name('login.store');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register.index');
Route::post('/register', [RegisterController::class, 'register'])->name('register.register');