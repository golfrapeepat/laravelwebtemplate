<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'home']);
Route::get('about',[HomeController::class,'about']);
Route::get('service',[HomeController::class,'service']);
Route::get('contact',[HomeController::class,'contact']);
Route::get('login',[HomeController::class,'login']);


Route::group([
'prefix' => 'blackend',
'middleware' =>'auth'

],function(){
    Route::get('/',[BackendController::class,'dashboard']);
    Route::get('dashboard',[BackendController::class,'dashboard']);
    Route::get('employees',[BackendController::class,'employees']);
    Route::get('employeelist',[BackendController::class,'employeelist']);
    Route::get('productlist',[BackendController::class,'productlist']);

    Route::resource('products',ProductController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
