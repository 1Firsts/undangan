<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\SeeorderController;

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

/**
 * Register all web routes for the application.
 */

Route::get('/', [UndanganController::class, 'index']);
Route::get('/feature/main-theme', [CobaController::class, 'main_theme'])->name('feature.main-theme');
Route::get('/feature/main-create', [CobaController::class, 'create_theme'])->name('feature.main-create');
Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/lockscreen', [AuthenticatedSessionController::class, 'showLockScreen'])->name('lockscreen');
Route::post('/unlock', [AuthenticatedSessionController::class, 'unlock'])->name('unlock');

Route::view('/feature/table', 'feature/table');

Route::view('/feature/theme', 'feature/theme');
Route::view('/feature/create-order', 'feature/create-order');
Route::view('/feature/create', 'feature/create');
Route::view('/feature/order', 'feature/order');
Route::view('/feature/profile/main-profile', 'feature/profile/main-profile');

Route::middleware('auth')->group(function () {
    Route::get('/vcoba', [CobaController::class, 'index'])->name('vcoba');
    
    Route::get('/feature/profile/main-profile', [ProfileController::class, 'edit'])->name('feature.profile.main-profile.edit');
    Route::patch('/feature/profile/main-profile', [ProfileController::class, 'update'])->name('feature.profile.main-profile.update');
    Route::delete('/feature/profile/main-profile', [ProfileController::class, 'destroy'])->name('feature.profile.main-profile.destroy');
    
    Route::post('/store_theme', [CobaController::class, 'store_theme'])->name('store_theme');  

    Route::post('/buat_tema/{theme}', [UndanganController::class, 'buat_tema'])->name('buat_tema');
    // Define 46 routes for different themes
    for ($i = 1; $i <= 46; $i++) {
        Route::post("/buat_tema/{$i}", [UndanganController::class, "buat_tema_{$i}"])->name("buat_tema_{$i}");
    }
});

// Create Data Theme
for ($i = 1; $i <= 46; $i++) {
    $routePrefix = "/seeorders{$i}";

    Route::delete("{$routePrefix}/delete/{id}", [SeeorderController::class, "delete_seeorder{$i}"])->name("seeorders{$i}.delete");
    Route::get("/feature/seeorder/seeorder{$i}", [SeeorderController::class, "mseeorder{$i}"])->name("seeorder{$i}.mseeorder{$i}");
    Route::get("/posts/show{$i}/{id}", [SeeorderController::class, "show_seeorder{$i}"])->name("posts.show{$i}");
}

// Define a single route for all tema views with a parameter
for ($i = 1; $i <= 46; $i++) {
    Route::view("/feature/theme/tema{$i}", "feature/theme/tema{$i}");
    Route::view("/feature/theme/preview/lihat{$i}", "feature/theme/preview/lihat{$i}");
}

Route::put('/data_links/{dataLink}/update', [CobaController::class, 'updateLink'])->name('updateLink');
Route::delete('/cobas/delete/{id}', [CobaController::class, 'delete_theme'])->name('coba.delete');
Route::get('/create_theme', [CobaController::class, 'create_theme'])->name('create_theme');
Route::get('/cobas', [CobaController::class, 'index'])->name('cobas');

Route::delete('/orders/delete/{id}', [OrderController::class, 'delete_order'])->name('order.delete');
Route::get('/create_order', [OrderController::class, 'create_order'])->name('create_order');
Route::post('/store_order', [OrderController::class, 'store_order'])->name('store_order');

require __DIR__.'/auth.php';
