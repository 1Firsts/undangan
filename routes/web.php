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
    
    Route::get('/feature/profile/main-profile', [ProfileController::class, 'edit'])->name('feature/profile/main-profile.edit');
    Route::patch('/feature/profile/main-profile', [ProfileController::class, 'update'])->name('feature/profile/main-profile.update');
    Route::delete('/feature/profile/main-profile', [ProfileController::class, 'destroy'])->name('feature/profile/main-profile.destroy');
    
    Route::post('/store_theme', [CobaController::class, 'store_theme'])->name('store_theme');
    Route::post('/buat_tema_1', [UndanganController::class, 'buat_tema_1'])->name('buat_tema_1');
});

Route::put('/data_links/{dataLink}/update', [CobaController::class, 'updateLink'])->name('updateLink');
Route::delete('/cobas/delete/{id}', [CobaController::class, 'delete_theme'])->name('coba.delete');
Route::get('/create_theme', [CobaController::class, 'create_theme'])->name('create_theme');
Route::get('/cobas', [CobaController::class, 'index'])->name('cobas');
Route::delete('/orders/delete/{id}', [OrderController::class, 'delete_order'])->name('order.delete');
Route::get('/create_order', [OrderController::class, 'create_order'])->name('create_order');
Route::post('/store_order', [OrderController::class, 'store_order'])->name('store_order');

// Create Data Theme
Route::delete('/seeorders1/delete/{id}', [SeeorderController::class, 'delete_seeorder1'])->name('seeorders1.delete');
Route::get('/feature/seeorder/seeorder1', [SeeorderController::class, 'mseeorder1'])->name('seeorder1.mseeorder1');
Route::get('/posts/show1/{id}', [SeeorderController::class, 'show_seeorder1'])->name('posts.show1');

Route::view('/feature/seeorder/seeorder2', 'feature/seeorder/seeorder2');
Route::view('/feature/seeorder/seeorder3', 'feature/seeorder/seeorder3');
Route::view('/feature/seeorder/seeorder4', 'feature/seeorder/seeorder4');
Route::view('/feature/seeorder/seeorder5', 'feature/seeorder/seeorder5');
Route::view('/feature/seeorder/seeorder6', 'feature/seeorder/seeorder6');
Route::view('/feature/seeorder/seeorder7', 'feature/seeorder/seeorder7');
Route::view('/feature/seeorder/seeorder8', 'feature/seeorder/seeorder8');
Route::view('/feature/seeorder/seeorder9', 'feature/seeorder/seeorder9');
Route::view('/feature/seeorder/seeorder10', 'feature/seeorder/seeorder10');
Route::view('/feature/seeorder/seeorder11', 'feature/seeorder/seeorder11');
Route::view('/feature/seeorder/seeorder12', 'feature/seeorder/seeorder12');
Route::view('/feature/seeorder/seeorder13', 'feature/seeorder/seeorder13');
Route::view('/feature/seeorder/seeorder14', 'feature/seeorder/seeorder14');
Route::view('/feature/seeorder/seeorder15', 'feature/seeorder/seeorder15');
Route::view('/feature/seeorder/seeorder16', 'feature/seeorder/seeorder16');
Route::view('/feature/seeorder/seeorder17', 'feature/seeorder/seeorder17');
Route::view('/feature/seeorder/seeorder18', 'feature/seeorder/seeorder18');
Route::view('/feature/seeorder/seeorder19', 'feature/seeorder/seeorder19');
Route::view('/feature/seeorder/seeorder20', 'feature/seeorder/seeorder20');
Route::view('/feature/seeorder/seeorder21', 'feature/seeorder/seeorder21');
Route::view('/feature/seeorder/seeorder22', 'feature/seeorder/seeorder22');
Route::view('/feature/seeorder/seeorder23', 'feature/seeorder/seeorder23');
Route::view('/feature/seeorder/seeorder24', 'feature/seeorder/seeorder24');
Route::view('/feature/seeorder/seeorder25', 'feature/seeorder/seeorder25');
Route::view('/feature/seeorder/seeorder26', 'feature/seeorder/seeorder26');
Route::view('/feature/seeorder/seeorder27', 'feature/seeorder/seeorder27');
Route::view('/feature/seeorder/seeorder28', 'feature/seeorder/seeorder28');
Route::view('/feature/seeorder/seeorder29', 'feature/seeorder/seeorder29');
Route::view('/feature/seeorder/seeorder30', 'feature/seeorder/seeorder30');
Route::view('/feature/seeorder/seeorder31', 'feature/seeorder/seeorder31');
Route::view('/feature/seeorder/seeorder32', 'feature/seeorder/seeorder32');
Route::view('/feature/seeorder/seeorder33', 'feature/seeorder/seeorder33');
Route::view('/feature/seeorder/seeorder34', 'feature/seeorder/seeorder34');
Route::view('/feature/seeorder/seeorder35', 'feature/seeorder/seeorder35');
Route::view('/feature/seeorder/seeorder36', 'feature/seeorder/seeorder36');
Route::view('/feature/seeorder/seeorder37', 'feature/seeorder/seeorder37');
Route::view('/feature/seeorder/seeorder38', 'feature/seeorder/seeorder38');
Route::view('/feature/seeorder/seeorder39', 'feature/seeorder/seeorder39');
Route::view('/feature/seeorder/seeorder40', 'feature/seeorder/seeorder40');
Route::view('/feature/seeorder/seeorder41', 'feature/seeorder/seeorder41');
Route::view('/feature/seeorder/seeorder42', 'feature/seeorder/seeorder42');
Route::view('/feature/seeorder/seeorder43', 'feature/seeorder/seeorder43');
Route::view('/feature/seeorder/seeorder44', 'feature/seeorder/seeorder44');
Route::view('/feature/seeorder/seeorder45', 'feature/seeorder/seeorder45');
Route::view('/feature/seeorder/seeorder46', 'feature/seeorder/seeorder46');

// Define a single route for all tema views with a parameter
for ($i = 1; $i <= 46; $i++) {
    Route::view("/feature/theme/tema{$i}", "feature/theme/tema{$i}");
    Route::view("/feature/theme/preview/lihat{$i}", "feature/theme/preview/lihat{$i}");
}

require __DIR__.'/auth.php';
