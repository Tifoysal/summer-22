<?php
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

Route::get('/',[DashboardController::class,'index'])->name('dashboard');
Route::get('/dashboard',[DashboardController::class,'viewDashboard'])->name('dashboard');
Route::get('/about',[AboutUsController::class,'index'])->name('about');
Route::get('/categories',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/form',[CategoryController::class,'form'])->name('category.form');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.created');



//  product operation
Route::get('/product/view',[ProductController::class,'view'])->name('view.product');
Route::get('/product/form',[ProductController::class,'form'])->name('form.product');
Route::post('/product/store',[ProductController::class,'store'])->name('store.product');
