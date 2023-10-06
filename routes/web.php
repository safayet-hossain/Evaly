<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\UserController;



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
//frontend
Route::get('/',[WebsiteController::class,'home'])->name('home.page');
Route::get('/login',[WebsiteController::class,'login'])->name('login');

//admin
//Route::get('/login',[UserController::class,'login'])->name('login');
Route::get('/registration',[UserController::class,'registration'])->name('registration');
Route::post('/do-registration',[UserController::class,'do_registration'])->name('do.registration');

Route::get('/resetpassword',[UserController::class,'reset'])->name('reset');


// login
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/do_login',[AuthController::class,'do_login'])->name('do.login');

//backend

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    //product
     Route::get('/product',[ProductController::class,'product'])->name('product');
     Route::get('/add_product',[ProductController::class,'add_product'])->name('add.product');
     Route::post('/product_store',[ProductController::class,'store'])->name('product_store');


    //category

    Route::get('/category',[CategoryController::class,'category'])->name('category');
    Route::get('/add_category',[CategoryController::class,'add_category'])->name('add.category');
    Route::post('/store_category',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category_view/{id}',[CategoryController::class,'category_view'])->name('category.view');
    Route::get('/category_edit/{id}',[CategoryController::class,'category_edit'])->name('category.edit');
    Route::put('/category_update/{id}',[CategoryController::class,'category_update'])->name('category.update');
    Route::get('/category_delete/{id}',[CategoryController::class,'category_delete'])->name('category.delete');
    //brand
    Route::get('/brand',[BrandController::class,'brand'])->name('brand');
    Route::get('/add_brand',[BrandController::class,'add_brand'])->name('add.brand');
    Route::post('/brand_store',[BrandController::class,'store'])->name('brand.store');
    Route::get('/edit_brand/{id}',[BrandController::class,'edit'])->name('edit.brand');
    Route::put('/update_brandform/{id}',[BrandController::class,'update'])->name('update.brand');
    Route::get('//brand_view/{id}',[BrandController::class,'view'])->name('brand.view');
    Route::get('//brand_delete/{id}',[BrandController::class,'delete'])->name('brand.delete');
    //payment
     Route::get('/payment',[PaymentController::class,'payment'])->name('payment');
    //customer
     Route::get('/customer',[CustomerController::class,'customer'])->name('customer');
     Route::get('/customerinfo',[CustomerController::class,'customerinfo'])->name('customerinfo');
     Route::post('/customer_store',[CustomerController::class,'store'])->name('customer.store');

    //order

     Route::get('/order',[OrderController::class,'Order'])->name('order');
    //cart
     Route::get('/cart',[CartController::class,'cart'])->name('cart');

     //wishlist
     Route::get('/wishlist',[WishlistController::class,'wishlist'])->name('wishlist');
     //shipping
     Route::get('/shipping',[ShippingController::class,'shipping'])->name('shipping');

     // Reports
     Route::get('/productreport',[ProductController::class,'report'])->name('report.product');
     Route::get('/searchproductreport',[ProductController::class,'reportsearch'])->name('report.search');
     Route::get('/allreports',[ReportController::class,'all_report'])->name('all.reports');
     Route::get('/brandreports',[ReportController::class,'brand_report'])->name('report.brand');
     Route::get('/categoryreports',[ReportController::class,'category_report'])->name('report.category');

     Route::get('/CustomerReports',[ReportController::class,'customer_report'])->name('report.customer');

     Route::get('/searchbrandtreport',[ReportController::class,'brand_report_search'])->name('brand.report.search');
}
);

