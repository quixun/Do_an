<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartegoryProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/trang-chu', [HomeController::class, 'index']);


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);



Route::get('/add-category-product', [CartegoryProduct::class, 'add_category_product']);
Route::get('/all-category-product', [CartegoryProduct::class, 'all_category_product']);
Route::post('/save-category-product', [CartegoryProduct::class, 'save_category_product']);
Route::get('/unactive-category-product/{category_product_id}', [CartegoryProduct::class, 'unactive_category_product']);
Route::get('/active-category-product/{category_product_id}', [CartegoryProduct::class, 'active_category_product']);
Route::get('/danh-muc-san-pham/{slug_category_product}', [CartegoryProduct::class, 'show_category_home']);


Route::get('/add-brand-product', [BrandController::class, 'add_brand_product']);
Route::get('/all-brand-product', [BrandController::class, 'all_brand_product']);
Route::post('/save-brand-product', [BrandController::class, 'save_brand_product']);
Route::get('/unactive-brand-product/{brand_product_id}', [BrandController::class, 'unactive_brand_product']);
Route::get('/active-brand-product/{brand_product_id}', [BrandController::class, 'active_brand_product']);
Route::get('/edit-brand-product/{brand_product_id}', [BrandController::class, 'edit_brand_product']);
Route::post('/update-brand-product/{brand_product_id}', [BrandController::class, 'update_brand_product']);
Route::get('/delete-brand-product/{brand_product_id}', [BrandController::class, 'delete_brand_product']);
Route::get('/thuong-hieu-san-pham/{brand_slug}', [BrandController::class, 'show_brand_home']);



Route::get('/add-product', [ProductController::class, 'add_product']);
Route::post('/save-product', [ProductController::class, 'save_product']);
Route::get('/all-product', [ProductController::class, 'all_product']);
Route::get('/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
Route::get('/active-product/{product_id}', [ProductController::class, 'active_product']);
Route::get('/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::post('/update-product/{product_id}', [ProductController::class, 'update_product']);
Route::get('/delete-product/{product_id}', [ProductController::class, 'delete_product']);
