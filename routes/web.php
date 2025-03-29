<?php

use App\Http\Controllers\AuthController;
use App\Models\MenuItem;
use App\Models\Stall;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $stalls = Stall::all();
    $menu_items = MenuItem::all();
    return view('dashboard', ['stalls' => $stalls, 'menu_items' => $menu_items]);   
});

// Auth routes
Route::get('/login', [AuthController::class, 'loginView']);
Route::get('/signup', [AuthController::class, 'signupView']);

Route::get('/v1/api/logout', [AuthController::class, 'logout']);
Route::post('/v1/api/login', [AuthController::class, 'login']);
Route::post('/v1/api/signup', [AuthController::class, 'signup']);
