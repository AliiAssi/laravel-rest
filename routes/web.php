<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
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


Route::get('/', [HomeController::class,'index']);
Route::get('/users', [AdminController::class,'users']);
Route::get('/deleteuser/{id}', [AdminController::class,'deleteuser']);
Route::get('/redirects', [HomeController::class,'redirects']);
Route::get('/foodmenu',[AdminController::class,'foodmenu']);

Route::post('/uploadfood',[AdminController::class,'uploadfood']);

Route::get('/deletefood/{id}',[AdminController::class,'deletefood']);

Route::get('/updateview/{id}',[AdminController::class,'updateview']);
Route::post('/update/{id}',[AdminController::class,'update']);

Route::post('/reservation',[AdminController::class,'makeReservation']);
Route::get('/reservations',[AdminController::class,'reservationView']);
Route::get('/deleteReservation/{id}',[AdminController::class,'deleteReservation']);

Route::get('/adminChefs',[AdminController::class,'adminChefs']);
Route::post('/uploadchef',[AdminController::class,'uploadchef']);
Route::get('/deleteChef/{id}',[AdminController::class,'deleteChef']);
Route::get('/updateChef/{id}',[AdminController::class,'updateViewChef']);
Route::post('/saveChef/{id}',[AdminController::class,'saveChef']);

Route::post('/addtocart/{id}',[CartController::class,'addtocart']);
Route::get('/cart',[CartController::class,'cart']);
Route::get('/minus_qty/{id}',[CartController::class,'minus_qty']);
Route::get('/add_qty/{id}',[CartController::class,'add_qty']);
Route::get('/delete_item/{id}',[CartController::class,'delete_item']);

Route::get('/adress',[HomeController::class,'adress']);
Route::post('/put_adress',[HomeController::class,'put_adress']);



Route::get('/checkout',[CheckoutController::class,'show']);
Route::get('/make_order',[CheckoutController::class,'make_order']);

Route::get('/tracker',[CheckoutController::class,'tracker_view']);
Route::get('/status/{id}',[CheckoutController::class,'status']);

Route::get('/new_orders',[AdminController::class,'new_orders']);
Route::get('/delete_order/{id}',[AdminController::class,'delete_order']);
Route::get('/pend_order/{id}',[AdminController::class,'pend_order']);
Route::get('/pending_orders',[AdminController::class,'pending_orders']);
Route::get('/complete_order/{id}',[AdminController::class,'complete_order']);
Route::get('/history',[AdminController::class,'history']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
