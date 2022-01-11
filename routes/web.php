<?php
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\CartController;
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
#前台

#登入/註冊
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
#登出
Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('user.logout');
#產品頁面
Route::get('/product',[\App\Http\Controllers\ProductController::class,'index'])->name('product');
#產品詳細頁面
Route::get('/product/detail/{id}',[\App\Http\Controllers\ProductController::class,'show'])->name('product.detail');
#首頁
Route::get('/',[HomeController::class,'home'])->name('home');
#商品加入購物車資料表
Route::post('/cart/store',[\App\Http\Controllers\CartController::class,'store'])->name('cart.store');

#後台
Route::prefix('admin')->group(function () {
    #主控台
    Route::get('/',[AdminDashboardController::class,'index'])->name( 'admin.dashboard.index');
    #商品管理
    Route::get('product',[\App\Http\Controllers\ManagerController::class,'index'])->name( 'admin.product.index');
    #新增商品
    Route::get('product/create',[\App\Http\Controllers\ManagerController::class,'create'])->name('admin.product.create');
    #編輯商品
    Route::get('product/{id}/edit',[\App\Http\Controllers\ManagerController::class,'edit'])->name('admin.product.edit');
    #儲存商品
    Route::post('product/store',[\App\Http\Controllers\ManagerController::class,'store'])->name('admin.product.store');
    #更新商品
    Route::patch('product/{product}', [\App\Http\Controllers\ManagerController::class, 'update'])->name('admin.product.update');
    #刪除商品
    Route::delete('product/{product}', [\App\Http\Controllers\ManagerController::class, 'destroy'])->name('admin.product.destroy');
});



