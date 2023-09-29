<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\SeeorderController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::view('/feature/theme', 'feature/theme');
Route::view('/feature/create-order', 'feature/create-order');
Route::view('/feature/create', 'feature/create');
Route::view('/feature/order', 'feature/order');

Route::middleware('auth')->group(function () {
    Route::get('/vcoba', [CobaController::class, 'index'])->name('vcoba');
    
    Route::view('/feature/profile/main-profile', 'feature/profile/main-profile');
    Route::post('/feature/profile/main-profile', [RegisteredUserController::class, 'store'])->name('main-profile.store');
    Route::get('/feature/profile/main-profile', [ProfileController::class, 'edit'])->name('main-profile.edit');
    Route::patch('/feature/profile/main-profile', [ProfileController::class, 'update'])->name('main-profile.update');
    Route::delete('/feature/profile/main-profile', [ProfileController::class, 'destroy'])->name('main-profile.destroy');
});

Route::post('/store_theme', [CobaController::class, 'store_theme'])->name('store_theme');  
Route::post('/buat_tema/{theme}', [UndanganController::class, 'buat_tema'])->name('buat_tema');

// Create Data Theme Routes
for ($i = 1; $i <= 45; $i++) {
    Route::delete("/seeorder{$i}/delete/{id}", [SeeorderController::class, "delete_seeorder{$i}"])->name("seeorder{$i}.delete");
    Route::get("/feature/seeorder/seeorder{$i}", [SeeorderController::class, "seeorder{$i}"])->name("seeorder{$i}.seeorder{$i}");
    Route::get("/posts/show{$i}/{id}", [SeeorderController::class, "show_seeorder{$i}"])->name("posts.show{$i}");
}

// Define a single route for all tema views with a parameter
for ($i = 1; $i <= 45; $i++) {
    Route::view("/feature/theme/preview/lihat{$i}", "feature/theme/preview/lihat{$i}");
}

Route::get("/feature/table", [TableController::class, "index"]);

// Start Showing

$currentURL = 'http://127.0.0.1:8000/posts/show'; // Define the base URL without ID
$generatedURLs = []; // Initialize an array to store generated URLs

for ($i = 1; $i <= 45; $i++) {
    $themeNumber = $i; // Assign the current theme number

    // Define the route for each theme
    Route::get("/feature/theme/tema{$i}", function () use ($i, $currentURL, &$generatedURLs) {
        $generatedURL = "{$currentURL}{$i}";

        // Pass $generatedURL to the view
        return view("feature/theme/tema{$i}", compact('generatedURL'));
    });

    // Store the generated URL in the array
    $generatedURLs[] = "{$currentURL}{$i}";
}

// Define a single route to display the table with all generated URLs
Route::get("/feature/table", function () use ($generatedURLs) {
    return view("feature/table", compact('generatedURLs'));
});

// End Showing

Route::put('/data_links/{dataLink}/update', [CobaController::class, 'updateLink'])->name('updateLink');
Route::delete('/cobas/delete/{id}', [CobaController::class, 'delete_theme'])->name('coba.delete');
Route::get('/create_theme', [CobaController::class, 'create_theme'])->name('create_theme');
Route::get('/cobas', [CobaController::class, 'index'])->name('cobas');

Route::delete('/orders/delete/{id}', [OrderController::class, 'delete_order'])->name('order.delete');
Route::get('/create_order', [OrderController::class, 'create_order'])->name('create_order');
Route::post('/store_order', [OrderController::class, 'store_order'])->name('store_order');

require __DIR__.'/auth.php';
