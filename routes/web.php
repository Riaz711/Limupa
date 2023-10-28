<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SubCategoryController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/products', [HomeController::class,'products'])->name('products');
Route::get('/product-details/{id}', [HomeController::class,'productDetails'])->name('product.details');
Route::get('/category-products/{id}', [HomeController::class,'categpryProducts'])->name('category.products');


Route::get('/shopping-cart', [CartController::class,'show'])->name('cart.show');

Route::get('/check-out',[CheckoutController::class,'index'])->name('checkout');

Route::get('/login-register',[CustomerController::class,'loginRegister'])->name('login.register');
Route::get('/login-register',[CustomerController::class,'loginRegister'])->name('login.register');
Route::get('/customer-dashboard',[CustomerController::class,'customerAccount'])->name('customer.account');
Route::get('/customer-logout',[CustomerController::class,'logout'])->name('customer.logout');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//        Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

   Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
   Route::get('/category-add',[CategoryController::class,'index'])->name('category.show');
   Route::post('/category-new',[CategoryController::class,'creat'])->name('category.creat');
   Route::get('/category-manage',[CategoryController::class,'manage'])->name('category.manage');
   Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
   Route::post('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');
   Route::get('/category-delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

   Route::get('/subCategory-add',[SubCategoryController::class,'index'])->name('subCategory.show');
   Route::post('/subCategory-new',[SubCategoryController::class,'creat'])->name('subCategory.creat');
   Route::get('/subCategory-manage',[SubCategoryController::class,'manage'])->name('subCategory.manage');
   Route::get('/subCategory-edit/{id}',[SubCategoryController::class,'edit'])->name('subCategory.edit');
   Route::post('/subCategory-update/{id}',[SubCategoryController::class,'update'])->name('subCategory.update');
   Route::get('/subCategory-delete/{id}',[SubCategoryController::class,'delete'])->name('subCategory.delete');

   route::resource('unit',UnitController::class);
   Route::resource('brand',BrandController::class);
   Route::resource('product',ProductController::class);

 
  
   Route::get('/product/update-tatus/{id}',[ProductController::class,'updateStatus'])->name('product.updateStatus');
   Route::get('get-subcategory-by-category',[ProductController::class,'getSubCategoryByCategory'])->name('get-subcategory-by-category');
});

