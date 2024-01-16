<?php

use App\Http\Controllers\web\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


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