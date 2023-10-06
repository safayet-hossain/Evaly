<?php


use App\Http\Controllers\Api\BrandsController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// brands  Api

   Route::get('/getbrands',[BrandsController::class,'Getbrands']);
   Route::get('/single-brand/{id}',[BrandsController::class,'singleBrand']);
   Route::post('/create_brand',[BrandsController::class,'create_brand']);
   Route::put('/update_brand/{id}',[BrandsController::class,'update_brand']);
   //Categories Api
    Route::get('/getCategories',[CategoriesController::class,'getCategory']);
    Route::get('/Single-category/{id}',[CategoriesController::class,'single_category']);
    Route::post('/Create_Category',[CategoriesController::class,'create_category']);

    // //admin api
    Route::post('/registration',[UsersController::class,'registration']);
    Route::post('/login',[UsersController::class,'login']);

//brand
    Route::get('/getallproduct',[ProductsController::class,'allproducts']);

    Route::group(['middleware'=>'auth:api'],function(){

     });
