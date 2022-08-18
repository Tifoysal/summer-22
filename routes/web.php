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
Route::get('/search',[HomeController::class,'search'])->name('search');


//cart
Route::get('/add-to-cart/{id}',[HomeController::class,'addToCart'])->name('add.to.cart');
Route::get('/view-cart',[HomeController::class,'viewCart'])->name('cart.view');
Route::get('/clear-cart',[HomeController::class,'clearCart'])->name('cart.clear');
Route::get('/all-products',[HomeController::class,'allProducts'])->name('all.products');




Route::get('/admin/login',[DashboardController::class,'login'])->name('login');
Route::post('/admin/do-login',[DashboardController::class,'doLogin'])->name('admin.login');
Route::group(['middleware'=>['auth','checkAdmin'],'prefix'=>'admin'],function(){

    Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
    Route::get('/category/view/{id}',[CategoryController::class,'view'])->name('category.view');
    Route::get('/category/edit/{category_id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{category_id}',[CategoryController::class,'update'])->name('category.update');

//  product operation
    Route::get('/products',[ProductController::class,'list'])->name('product.list');
    Route::get('/product/form',[ProductController::class,'form'])->name('form.product');
    Route::post('/product/store',[ProductController::class,'store'])->name('store.product');

//for customers
    Route::get('/customers',[CustomerController::class,'list'])->name('customer.list');
});
