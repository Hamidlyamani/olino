<?php

use Illuminate\Support\Facades\Route;

/*
|------------------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */


// Route::get('/', '::classindex');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name("home");
Route::get('/shop', [App\Http\Controllers\shopController::class, 'index'])->name("shop");
Route::get('/about', [App\Http\Controllers\aboutController::class, 'index'])->name("about");
Route::get('/shop/{id}', [App\Http\Controllers\shopController::class, 'getProduct'])->name("detail");
Route::get('/shopInsert', [App\Http\Controllers\shopController::class, 'inseret'])->name("shopw");
Route::get('/registe', [App\Http\Controllers\clientController::class, 'create'])->name("registe");
Route::post('/registe/store', [App\Http\Controllers\clientController::class, 'store']);
Route::get('/contact', [App\Http\Controllers\contactController::class, 'contact'])->name("contact");
Route::get('/login', [App\Http\Controllers\loginController::class, 'index'])->name("login");
Route::post('/login/connect', [App\Http\Controllers\loginController::class, 'login'])->name("loginconnect");

// web.php or routes/web.php

Route::group(['middleware' => 'redirectIfNotAuthenticated'], function () {

    route::get('/mycart', [App\Http\Controllers\cartController::class, 'index'])->name("cart");
    route::post('/mycart/insert', [App\Http\Controllers\cartController::class, 'addToCart'])->name("insert-cart");
    route::post('/remove/{cartId}', [App\Http\Controllers\cartController::class, 'removeFromCart'])->name("remove-cart");
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [App\Http\Controllers\LogoutController::class, 'logout'])->name('logout');
    route::post('/editclientinformation', [App\Http\Controllers\ClientController::class, 'update'])->name("updateclientinformation");
    route::get('/my_informations', [App\Http\Controllers\ClientController::class, 'edit'])->name("editclient");

});
Route::group(['middleware' => 'admin'], function () {
    Route::get('/dashboard/{page}', [App\Http\Controllers\dashboardController::class, 'index'])->name("dash");
    Route::post('/dashboard/{page}', [App\Http\Controllers\dashboardController::class, 'index'])->name("dash");
    Route::get('/dashboard', [App\Http\Controllers\dashboardController::class, 'accueil'])->name("dash");
    Route::get('/removeProduct/{idProduct}', [App\Http\Controllers\dashboardController::class, 'removeProduct'])->name("removeProduct");
    Route::post('/insertProduct', [App\Http\Controllers\dashboardController::class, 'insertProduct'])->name("insertProduct");
    Route::get('/removeclient/{idClient}', [App\Http\Controllers\dashboardController::class, 'removClient'])->name("removClient");
    Route::get('/removeorder/{idorder}', [App\Http\Controllers\dashboardController::class, 'removOrder'])->name("removClient");

});