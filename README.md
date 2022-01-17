# 系統畫面

## 前台

### 首頁(未登入)
![Imgur](https://imgur.com/H0Tm34m)
- - -
### 首頁(登入)
![Imgur](https://imgur.com/TvvaKKe)
- - -
### 關於
![Imgur](https://imgur.com/tkm81r1)
- - -
### 器材
##### — 瀏覽所有器材
![Imgur](https://imgur.com/r2QNvIe)
- - -

##### — 器材加入購物車
![Imgur](https://imgur.com/HO0eDuu)
- - -

### 個人資料頁面
##### — 查看個人資料
![Imgur](https://imgur.com/JkTlIos)
- - -
##### — 編輯個人資料
![Imgur](https://imgur.com/JszTISt)
- - -


## 後台

### 所有器材
##### — 查看目前所有器材
![Imgur](https://imgur.com/LaLoc25)
- - -

### 器材編輯、刪除
##### — 可編輯器材內容或刪除器材
![Imgur](https://imgur.com/FKqzsCl)
- - -

### 商品新增
##### — 新增新的商品
![Imgur](https://imgur.com/XhdixgO)
- - -

# 系統名稱及作用

## 登山露營器具租借
* 顧客可以選擇商品、數量進行購買
* 顧客在確認餐點無誤後，可以按下加入購物車
* 管理者可以編輯、新增、刪除產品
* 管理者可以管理會員

- - -

# 系統的主要功能

## 前台 — [3A732031 陳靖媛](https://github.com/3A732031)
* 註冊、登入 | Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
            return view('dashboard');
            })->name('dashboard');
* 登出      | Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('user.logout');
* 產品頁    | Route::get('/product',[\App\Http\Controllers\ProductController::class,'index'])->name('product');
* 產品資訊頁 | Route::get('/product/detail/{id}',[\App\Http\Controllers\ProductController::class,'show'])->name('product.detail');
* 首頁      | Route::get('/',[HomeController::class,'home'])->name('home');
* 購物車頁面 | Route::get('/cart/index',[\App\Http\Controllers\CartController::class,'index'])->name('cart.index');
* 購物車刪除商品 | Route::delete('/cart/destroy/{id}',[\App\Http\Controllers\CartController::class,'destroy'])->name('cart.destroy');
* 結帳頁面 | Route::get('/cart/checkout',[\App\Http\Controllers\CartController::class,'checkout'])->name('cart.checkout');
* 送出訂單 | Route::get('/cart/end',[\App\Http\Controllers\CartController::class,'end'])->name('cart.end');
* 訂單頁面 | Route::get('/order',[\App\Http\Controllers\OrderController::class,'index'])->name('order');

## 後台 — [3A832056 沈沛儒](https://github.com/3A832056)
* 主控台 | Route::prefix('admin')->group(function () {
          Route::get('/',[AdminDashboardController::class,'index'])->name( 'admin.dashboard.index');

* 商品管理 | Route::get('product',[\App\Http\Controllers\ManagerController::class,'index'])->name( 'admin.product.index');
* 新增商品 | Route::get('product/create',[\App\Http\Controllers\ManagerController::class,'create'])->name('admin.product.create');
* 編輯商品 | Route::get('product/{id}/edit',[\App\Http\Controllers\ManagerController::class,'edit'])->name('admin.product.edit');

* 儲存商品 | Route::post('product/store',[\App\Http\Controllers\ManagerController::class,'store'])->name('admin.product.store');
* 更新商品 | Route::patch('product/{product}', [\App\Http\Controllers\ManagerController::class, 'update'])->name('admin.product.update');
* 刪除商品 | Route::delete('product/{product}', [\App\Http\Controllers\ManagerController::class, 'destroy'])->name('admin.product.destroy');
});
- - -
## 前台 — [3A832008 朱惠淋](https://github.com/3A832008)
* 商品加入購物車資料表 | Route::post('/cart/store',[\App\Http\Controllers\CartController::class,'store'])->name('cart.store');
- - -
```
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
#購物車頁面
Route::get('/cart/index',[\App\Http\Controllers\CartController::class,'index'])->name('cart.index');
#從購物車刪除商品
Route::delete('/cart/destroy/{id}',[\App\Http\Controllers\CartController::class,'destroy'])->name('cart.destroy');
#結帳頁面
Route::get('/cart/checkout',[\App\Http\Controllers\CartController::class,'checkout'])->name('cart.checkout');
#送出訂單
Route::get('/cart/end',[\App\Http\Controllers\CartController::class,'end'])->name('cart.end');
#訂單頁面
Route::get('/order',[\App\Http\Controllers\OrderController::class,'index'])->name('order');

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
```
- - -
## ERD
![Imgur](https://imgur.com/m8HRmEN)
- - -
## 關聯式綱要圖
![Imgur](https://imgur.com/0ccVyjb)
- - -
## 資料表欄位設計
![Imgur](https://imgur.com/EEw8990)
- - -
![Imgur](https://imgur.com/LgLgalG)
- - -


# 初始專案與DB負責的同學
* 初始專案、資料庫建立、資料庫關聯 — [3A832056 沈沛儒](https://github.com/3A832056)
* 資料庫關聯 — [3A832008 朱惠淋](https://github.com/3A832008)
 - - -
# 額外使用的套件或樣板
* 前台樣板 — 使用極簡風格的[shop-homepage](https://startbootstrap.com/template/shop-homepage)
* 使用套件：
    * doctrine/dbal — 修改資料庫欄位
- - -
# 系統測試資料存放位置
#### 本專案資料夾final05底下的final05.sql
- - -
# 系統復原
##### 1.複製在Github的專案 https://github.com/WISD-2021/final05.git ，打開Cmder，在www底下輸入：
    git clone https://github.com/WISD-2021/final05.git 

##### 2.進入專案資料夾
    cd final05

##### 3.復原專案三步驟
    composer install
    composer run-script post-root-package-install
    composer run-script post-create-project-cmd

##### 4.打開專案的.env檔案，修改資料庫IP、Port、名稱、密碼及資料庫
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=33060
    DB_DATABASE=final07
    DB_USERNAME=root
    DB_PASSWORD=root

##### 5.登入Adminer，在Admin內匯入final01專案的final01.sql
    資料庫系統：MySQL
    伺服器：localhost:33060
    帳號：root
    密碼：root

##### 6.修改UwAmp的Document Root
    {DOCUMENTPATH}/final05/public
- - -
# 系統使用者測試帳號

## 前台
##### 會員
    帳號：aaa@gmail.com
    密碼：12345678
- - -
## 後台
##### 管理者
    帳號：admin@gmail.com
    密碼：123qweasd
- - -
# 系統開發人員與工作分配

## 前台 — [3A832056 沈沛儒](https://github.com/3A832056)
    ．首頁
    ．產品
    ．產品資訊
    ．登入登出註冊
    ．購物車
    ．結帳
    ．訂單資訊
## 後台 — [3A832056 沈沛儒](https://github.com/3A832056)
    ．主控台
    ．商品管理
    
    ．README編寫
 - - -
## 前台 — [3A832008 朱惠淋](https://github.com/3A832008)
    ．商品加入購物車資料表
    ．前台外觀設計

    ．README編寫

