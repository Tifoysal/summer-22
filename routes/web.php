<?php

use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomer;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
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

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/registration',[FrontendCustomer::class,'registration'])->name('registration');
Route::post('/do-registration',[FrontendCustomer::class,'doRegistration'])->name('registration.do');
Route::post('/do-login',[FrontendCustomer::class,'doLogin'])->name('login.do');
Route::get('/logout',[FrontendCustomer::class,'logout'])->name('logout');









Route::get('/admin',[DashboardController::class,'index'])->name('dashboard');
Route::get('/about',[AboutUsController::class,'index'])->name('about');

Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('/category/view/{id}',[CategoryController::class,'view'])->name('category.view');

//  product operation
Route::get('/products',[ProductController::class,'list'])->name('product.list');
Route::get('/product/form',[ProductController::class,'form'])->name('form.product');
Route::post('/product/store',[ProductController::class,'store'])->name('store.product');

//for customers
Route::get('/customers',[CustomerController::class,'list'])->name('customer.list');
