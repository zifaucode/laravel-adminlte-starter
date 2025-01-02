<?php

use App\Http\Controllers\web\AdminController;
use App\Http\Controllers\web\AuthController;
use App\Http\Controllers\web\LoginController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| ROUTE AUTH 🟢
|--------------------------------------------------------------------------
*/

Route::controller(LoginController::class)->prefix('/')->group(function () {
    Route::get('/', 'index')->name('login');
});
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| END ROUTE AUTH 🟤
|--------------------------------------------------------------------------
*/




/*
|--------------------------------------------------------------------------
| ROUTE ADMIN 🟢
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'admin'], function () {

    Route::controller(AdminController::class)->prefix('/dashboard')->group(function () {
        Route::get('/', 'index')->name('dashboard');
    });
});

/*
|--------------------------------------------------------------------------
| END ADMIN 🟤
|--------------------------------------------------------------------------
*/