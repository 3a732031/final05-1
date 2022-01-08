<?php
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('user.logout');
Route::get('/product',[\App\Http\Controllers\ProductController::class,'index'])->name('product');

Route::prefix('admin')->group(function () {
    Route::get('/',[AdminDashboardController::class,'index'])->name( 'admin.dashboard.index');

    Route::get('product',[\App\Http\Controllers\ManagerController::class,'index'])->name( 'admin.product.index');
    Route::get('product/create',[\App\Http\Controllers\ManagerController::class,'create'])->name('admin.product.create');
    Route::get('product/{id}/edit',[\App\Http\Controllers\ManagerController::class,'edit'])->name('admin.product.edit');

    Route::post('product/store',[\App\Http\Controllers\ManagerController::class,'store'])->name('admin.product.store');
    Route::patch('product/{product}', [\App\Http\Controllers\ManagerController::class, 'update'])->name('admin.product.update');
    Route::delete('product/{product}', [\App\Http\Controllers\ManagerController::class, 'destroy'])->name('admin.product.destroy');
});

Route::get('/',[HomeController::class,'home'])->name('home');

