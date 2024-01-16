<?php

use App\Http\Controllers\web\AdminController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| ROUTE DASHBOARD ADMIN 🟢
|--------------------------------------------------------------------------
*/

Route::controller(AdminController::class)->prefix('/')->group(function () {
    Route::get('/', 'index')->name('dashboard');
});
/*
|--------------------------------------------------------------------------
| END ROUTE FRONTEND 🟤
|--------------------------------------------------------------------------
*/