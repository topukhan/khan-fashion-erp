<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\Product\ColorController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\SizeController;
use App\Http\Controllers\Product\TypeController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth', 'verified'])->group(function(){
// });
Route::view('/', 'homePage')->name('dashboard');
// Product Category 
Route::resource('products/categories', CategoryController::class);
// Product Size
Route::resource('products/sizes', SizeController::class);
// Product Color
Route::resource('products/colors', ColorController::class);
// Product Type
Route::resource('products/types', TypeController::class);
// Product Controller
Route::resource('products', ProductController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
