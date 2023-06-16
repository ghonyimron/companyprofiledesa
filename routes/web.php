<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfildesaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Home 
Route::get('/', [HomeController::class,'index']);   
Route::get('/profil', [HomeController::class,'profil']);
Route::get('/agenda', [HomeController::class,'agenda']);
Route::get('/layanan', [HomeController::class,'layanan']);
Route::get('/layanan/suratkettidakmampu', [HomeController::class,'ketsurattidakmampu']);
Route::get('/layanan/surat-ket-usaha', [HomeController::class,'suratketusaha']);
Route::get('/berita', [HomeController::class,'berita']);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/berita-details', [HomeController::class,'beritadetails']);

// Auth
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'authenticated']);
Route::get('/logout', [AuthController::class,'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::resource('profildesa',ProfildesaController::class)->middleware('auth');
Route::resource('agenda',ProfildesaController::class)->middleware('auth');