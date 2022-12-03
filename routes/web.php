<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartegoryProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

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
Route::post('/tim-kiem',[HomeController::class, 'search']);


Route::get('/admin', [AdminController::class, 'index']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);



Route::get('/admin/add-category-product', [CartegoryProduct::class, 'add_category_product']);
Route::get('/admin/all-category-product', [CartegoryProduct::class, 'all_category_product']);
Route::post('/admin/save-category-product', [CartegoryProduct::class, 'save_category_product']);
Route::get('/admin/unactive-category-product/{category_product_id}', [CartegoryProduct::class, 'unactive_category_product']);
Route::get('/admin/active-category-product/{category_product_id}', [CartegoryProduct::class, 'active_category_product']);
Route::get('/danh-muc-san-pham/{slug_category_product}', [CartegoryProduct::class, 'show_category_home']);
Route::get('/admin/edit-category-product/{category_product_id}', [CartegoryProduct::class, 'edit_category_product']);
Route::post('/admin/update-category-product/{category_product_id}', [CartegoryProduct::class, 'update_category_product']);
Route::get('/admin/delete-category-product/{category_product_id}', [CartegoryProduct::class, 'delete_category_product']);


Route::get('/admin/add-brand-product', [BrandController::class, 'add_brand_product']);
Route::get('/admin/all-brand-product', [BrandController::class, 'all_brand_product']);
Route::post('/admin/save-brand-product', [BrandController::class, 'save_brand_product']);
Route::get('/admin/unactive-brand-product/{brand_product_id}', [BrandController::class, 'unactive_brand_product']);
Route::get('/admin/active-brand-product/{brand_product_id}', [BrandController::class, 'active_brand_product']);
Route::get('/admin/edit-brand-product/{brand_product_id}', [BrandController::class, 'edit_brand_product']);
Route::post('/admin/update-brand-product/{brand_product_id}', [BrandController::class, 'update_brand_product']);
Route::get('/admin/delete-brand-product/{brand_product_id}', [BrandController::class, 'delete_brand_product']);
Route::get('/thuong-hieu-san-pham/{brand_slug}', [BrandController::class, 'show_brand_home']);



Route::get('/admin/add-product', [ProductController::class, 'add_product']);
Route::post('/admin/save-product', [ProductController::class, 'save_product']);
Route::get('/admin/all-product', [ProductController::class, 'all_product']);
Route::get('/admin/unactive-product/{product_id}', [ProductController::class, 'unactive_product']);
Route::get('/admin/active-product/{product_id}', [ProductController::class, 'active_product']);
Route::get('/admin/edit-product/{product_id}', [ProductController::class, 'edit_product']);
Route::post('admin/update-product/{product_id}', [ProductController::class, 'update_product']);
Route::get('/admin/delete-product/{product_id}', [ProductController::class, 'delete_product']);
Route::get('/admin/chi-tiet-san-pham/{product_slug}',[ProductController::class, 'details_product']);
Route::get('/admin/chi-tiet-san-pham/{product_id}',[ProductController::class, 'details_product']);




Route::post('/save-cart',[CartController::class, 'save_cart']);
Route::get('/show-cart',[CartController::class, 'show_cart']);
Route::get('/delete-to-cart/{rowId}',[CartController::class, 'delete_to_cart']);
Route::post('/update-cart-quantity',[CartController::class, 'update_cart_quantity']);



Route::get('/login-checkout',[CheckoutController::class, 'login_checkout']);
Route::post('/add-customer',[CheckoutController::class, 'add_customer']);
Route::get('/checkout',[CheckoutController::class, 'checkout']);
Route::post('/login-customer',[CheckoutController::class, 'login_customer']);
Route::get('/logout-checkout',[CheckoutController::class, 'logout_checkout']);
Route::post('/save-checkout-customer',[CheckoutController::class, 'save_checkout_customer']);
Route::get('/payment',[CheckoutController::class, 'payment']);
Route::post('/order-place',[CheckoutController::class, 'order_place']);
Route::get('/manage-order',[CheckoutController::class, 'manage_order']);
Route::get('/view-order/{orderId}',[CheckoutController::class, 'view_order']);
Route::get('/taikhoan',[CheckoutController::class, 'user_setting']);
Route::get('/view-order-user/{orderId}',[CheckoutController::class, 'view_order_user']);
