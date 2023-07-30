<?php

use App\Http\Controllers\AdminsideController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'admin']], function() {
    Route::get('/category',[AdminsideController::class, 'first']);
    Route::post('/save',[AdminsideController::class, 'store']);
    Route::get('/product',[ProductsController::class, 'second']);
    Route::post('/pro-save',[ProductsController::class, 'store']);
    Route::get('/show',[ProductsController::class, 'third']);
    
    Route::get("/ca-delete/{id}",[AdminsideController::class, "delete"]);
    Route::get("/edithana/{id}",[AdminsideController::class, "edit1"]);
    Route::post('/update/{id}', [AdminsideController::class, 'update']);
    
    Route::get("/delete/{id}",[ProductsController::class, "drop"]);
    Route::get("/editdul/{id}",[ProductsController::class, "edit2"]);
    Route::post('/pro-update/{id}', [ProductsController::class, 'update']);
});
Route::group(['middleware' => ['auth']], function() {


});
