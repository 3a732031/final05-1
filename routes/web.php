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

Route::resource('orders', OrderController::class);
Route::resource('products', ProductController::class);
Route::resource('ord.details', OrdDetailController::class)->shallow();
Route::resource('managers', ManagerController::class);

Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('user.logout');
Route::get('/product',[\App\Http\Controllers\ProductController::class,'product'])->name('product');
Route::get('/',[HomeController::class,'home'])->name('home');

