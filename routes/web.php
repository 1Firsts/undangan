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
Route::view('/feature/seeorder', 'feature/seeorder');

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

Route::view('/feature/theme/tema1', 'feature/theme/tema1');
Route::view('/feature/theme/tema2', 'feature/theme/tema2');
Route::view('/feature/theme/tema3', 'feature/theme/tema3');
Route::view('/feature/theme/tema4', 'feature/theme/tema4');
Route::view('/feature/theme/tema5', 'feature/theme/tema5');
Route::view('/feature/theme/tema6', 'feature/theme/tema6');
Route::view('/feature/theme/tema7', 'feature/theme/tema7');
Route::view('/feature/theme/tema8', 'feature/theme/tema8');
Route::view('/feature/theme/tema9', 'feature/theme/tema9');
Route::view('/feature/theme/tema10', 'feature/theme/tema10');
Route::view('/feature/theme/tema11', 'feature/theme/tema11');
Route::view('/feature/theme/tema12', 'feature/theme/tema12');
Route::view('/feature/theme/tema13', 'feature/theme/tema13');
Route::view('/feature/theme/tema14', 'feature/theme/tema14');
Route::view('/feature/theme/tema15', 'feature/theme/tema15');
Route::view('/feature/theme/tema16', 'feature/theme/tema16');
Route::view('/feature/theme/tema17', 'feature/theme/tema17');
Route::view('/feature/theme/tema18', 'feature/theme/tema18');
Route::view('/feature/theme/tema19', 'feature/theme/tema19');
Route::view('/feature/theme/tema20', 'feature/theme/tema20');
Route::view('/feature/theme/tema21', 'feature/theme/tema21');
Route::view('/feature/theme/tema22', 'feature/theme/tema22');
Route::view('/feature/theme/tema23', 'feature/theme/tema23');
Route::view('/feature/theme/tema24', 'feature/theme/tema24');
Route::view('/feature/theme/tema25', 'feature/theme/tema25');
Route::view('/feature/theme/tema26', 'feature/theme/tema26');
Route::view('/feature/theme/tema27', 'feature/theme/tema27');
Route::view('/feature/theme/tema28', 'feature/theme/tema28');
Route::view('/feature/theme/tema29', 'feature/theme/tema29');
Route::view('/feature/theme/tema30', 'feature/theme/tema30');
Route::view('/feature/theme/tema31', 'feature/theme/tema31');
Route::view('/feature/theme/tema32', 'feature/theme/tema32');
Route::view('/feature/theme/tema33', 'feature/theme/tema33');
Route::view('/feature/theme/tema34', 'feature/theme/tema34');
Route::view('/feature/theme/tema35', 'feature/theme/tema35');
Route::view('/feature/theme/tema36', 'feature/theme/tema36');
Route::view('/feature/theme/tema37', 'feature/theme/tema37');
Route::view('/feature/theme/tema38', 'feature/theme/tema38');
Route::view('/feature/theme/tema39', 'feature/theme/tema39');
Route::view('/feature/theme/tema40', 'feature/theme/tema40');
Route::view('/feature/theme/tema41', 'feature/theme/tema41');
Route::view('/feature/theme/tema42', 'feature/theme/tema42');
Route::view('/feature/theme/tema43', 'feature/theme/tema43');
Route::view('/feature/theme/tema44', 'feature/theme/tema44');
Route::view('/feature/theme/tema45', 'feature/theme/tema45');
Route::view('/feature/theme/tema46', 'feature/theme/tema46');

Route::view('/feature/theme/preview/lihat1', 'feature/theme/preview/lihat1');
Route::view('/feature/theme/preview/lihat2', 'feature/theme/preview/lihat2');
Route::view('/feature/theme/preview/lihat3', 'feature/theme/preview/lihat3');
Route::view('/feature/theme/preview/lihat4', 'feature/theme/preview/lihat4');
Route::view('/feature/theme/preview/lihat5', 'feature/theme/preview/lihat5');
Route::view('/feature/theme/preview/lihat6', 'feature/theme/preview/lihat6');
Route::view('/feature/theme/preview/lihat7', 'feature/theme/preview/lihat7');
Route::view('/feature/theme/preview/lihat8', 'feature/theme/preview/lihat8');
Route::view('/feature/theme/preview/lihat9', 'feature/theme/preview/lihat9');
Route::view('/feature/theme/preview/lihat10', 'feature/theme/preview/lihat10');
Route::view('/feature/theme/preview/lihat11', 'feature/theme/preview/lihat11');
Route::view('/feature/theme/preview/lihat12', 'feature/theme/preview/lihat12');
Route::view('/feature/theme/preview/lihat13', 'feature/theme/preview/lihat13');
Route::view('/feature/theme/preview/lihat14', 'feature/theme/preview/lihat14');
Route::view('/feature/theme/preview/lihat15', 'feature/theme/preview/lihat15');
Route::view('/feature/theme/preview/lihat16', 'feature/theme/preview/lihat16');
Route::view('/feature/theme/preview/lihat17', 'feature/theme/preview/lihat17');
Route::view('/feature/theme/preview/lihat18', 'feature/theme/preview/lihat18');
Route::view('/feature/theme/preview/lihat19', 'feature/theme/preview/lihat19');
Route::view('/feature/theme/preview/lihat20', 'feature/theme/preview/lihat20');
Route::view('/feature/theme/preview/lihat21', 'feature/theme/preview/lihat21');
Route::view('/feature/theme/preview/lihat22', 'feature/theme/preview/lihat22');
Route::view('/feature/theme/preview/lihat23', 'feature/theme/preview/lihat23');
Route::view('/feature/theme/preview/lihat24', 'feature/theme/preview/lihat24');
Route::view('/feature/theme/preview/lihat25', 'feature/theme/preview/lihat25');
Route::view('/feature/theme/preview/lihat26', 'feature/theme/preview/lihat26');
Route::view('/feature/theme/preview/lihat27', 'feature/theme/preview/lihat27');
Route::view('/feature/theme/preview/lihat28', 'feature/theme/preview/lihat28');
Route::view('/feature/theme/preview/lihat29', 'feature/theme/preview/lihat29');
Route::view('/feature/theme/preview/lihat30', 'feature/theme/preview/lihat30');
Route::view('/feature/theme/preview/lihat31', 'feature/theme/preview/lihat31');
Route::view('/feature/theme/preview/lihat32', 'feature/theme/preview/lihat32');
Route::view('/feature/theme/preview/lihat33', 'feature/theme/preview/lihat33');
Route::view('/feature/theme/preview/lihat34', 'feature/theme/preview/lihat34');
Route::view('/feature/theme/preview/lihat35', 'feature/theme/preview/lihat35');
Route::view('/feature/theme/preview/lihat36', 'feature/theme/preview/lihat36');
Route::view('/feature/theme/preview/lihat37', 'feature/theme/preview/lihat37');
Route::view('/feature/theme/preview/lihat38', 'feature/theme/preview/lihat38');
Route::view('/feature/theme/preview/lihat39', 'feature/theme/preview/lihat39');
Route::view('/feature/theme/preview/lihat40', 'feature/theme/preview/lihat40');
Route::view('/feature/theme/preview/lihat41', 'feature/theme/preview/lihat41');
Route::view('/feature/theme/preview/lihat42', 'feature/theme/preview/lihat42');
Route::view('/feature/theme/preview/lihat43', 'feature/theme/preview/lihat43');
Route::view('/feature/theme/preview/lihat44', 'feature/theme/preview/lihat44');
Route::view('/feature/theme/preview/lihat45', 'feature/theme/preview/lihat45');
Route::view('/feature/theme/preview/lihat46', 'feature/theme/preview/lihat46');

Route::view('/feature/seeorder/seeorder1', 'feature/seeorder/seeorder1');
Route::view('/posts/show1', [SeeorderController::class, 'show_seeorder1'])->name('posts.show1');
Route::delete('/seeorders1/delete/{id}', [SeeorderController::class, 'delete_seeorder1'])->name('seeorders1.delete');

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

require __DIR__.'/auth.php';
