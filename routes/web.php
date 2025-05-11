<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LivestockController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\FinancialController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Controller;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('users', UserController::class);
Route::resource('livestock', LivestockController::class);
// Inventory Routes
Route::resource('inventory', InventoryController::class);
// Financial Routes
Route::resource('financial', FinancialController::class);

Route::resource('reports', ReportsController::class);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Routes that require just login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Only authenticated users can access these
    Route::resource('livestock', LivestockController::class);
    Route::resource('inventory', InventoryController::class);
    Route::resource('finance', FinanceController::class);
    Route::resource('reports', ReportsController::class);
});

// Routes that require admin login
Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class); // only for admins
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// routes/web.php

Route::get('/logout', function () {

    return view('logout'); // Redirect to the home page or dashboard after logout
})->name('logout');



Route::get('/', function () {
    return view('welcome');
});
