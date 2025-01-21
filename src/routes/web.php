<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'login']);

Route::get('/main', [MainController::class, 'main']);

Route::get('/contact', [MainController::class, 'contact']);

Route::get('/docs', [MainController::class, 'docs']);