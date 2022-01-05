<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
Route::get('/product',[\App\Http\Controllers\ProductController::class,'product'])->name('product');

Route::prefix('admin')->group(function () {
    Route::get('/',[\App\Http\Controllers\ManagerController::class,'index'])->name( 'admin.dashboard.index');

    Route::get('product',[\App\Http\Controllers\ManagerController::class,'index'])->name( 'admin.posts.index');
//    Route::get('posts/create',[\App\Http\Controllers\ManagerController::class,'create'])->name('admin.posts.create');
//    Route::get('posts/{id}/edit',[\App\Http\Controllers\ManagerController::class,'edit'])->name('admin.posts.edit');
//
//    Route::post('posts',[\App\Http\Controllers\ManagerController::class,'store'])->name('admin.posts.store');
//    Route::patch('posts/{post}', [\App\Http\Controllers\ManagerController::class, 'update'])->name('admin.posts.update');
//    Route::delete('posts/{post}', [\App\Http\Controllers\ManagerController::class, 'destroy'])->name('admin.posts.destroy');
});
Route::get('/',[HomeController::class,'home'])->name('home');

