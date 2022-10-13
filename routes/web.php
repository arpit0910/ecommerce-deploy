<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CMSController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeaderSliderController;
use App\Http\Controllers\PromocodeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Frontend Routes
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/product/{id}', [FrontendController::class, 'product'])->name('frontend.product');
Route::get('/shop', [FrontendController::class, 'shop'])->name('frontend.shop');
Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('frontend.wishlist');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('frontend.aboutUs');
Route::get('/cart', [FrontendController::class, 'cart'])->name('frontend.cart');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('frontend.checkout');
Route::get('/profile', [FrontendController::class, 'profile'])->name('frontend.profile');
Route::get('/order-tracking', [FrontendController::class, 'orderTracking'])->name('frontend.orderTracking');
Route::get('/order-tracking', [FrontendController::class, 'orderTracking'])->name('frontend.orderTracking');

// Category Routes
Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::patch('category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('category/{id}/delete', [CategoryController::class, 'destroy'])->name('category.delete');
Route::post('category/toggleStatus', [CategoryController::class, 'toggleStatus'])->name('category.toggleStatus');

//Promocodes Routes
Route::get('promocodes', [PromocodeController::class, 'index'])->name('promocode.index');
Route::get('promocode/create', [PromocodeController::class, 'create'])->name('promocode.create');
Route::post('promocode/store', [PromocodeController::class, 'store'])->name('promocode.store');
Route::get('promocode/{id}/edit', [PromocodeController::class, 'edit'])->name('promocode.edit');
Route::patch('promocode/{id}/update', [PromocodeController::class, 'update'])->name('promocode.update');
Route::delete('promocode/{id}/delete', [PromocodeController::class, 'destroy'])->name('promocode.delete');
Route::post('promocode/toggleStatus', [PromocodeController::class, 'toggleStatus'])->name('promocode.toggleStatus');

// Header Slider Route
Route::get('header-sliders', [HeaderSliderController::class, 'index'])->name('headerSlider.index');
Route::get('header-slider/create', [HeaderSliderController::class, 'create'])->name('headerSlider.create');
Route::post('header-slider/store', [HeaderSliderController::class, 'store'])->name('headerSlider.store');
Route::get('header-slider/{id}/edit', [HeaderSliderController::class, 'edit'])->name('headerSlider.edit');
Route::patch('header-slider/{id}/update', [HeaderSliderController::class, 'update'])->name('headerSlider.update');
Route::delete('header-slider/{id}/delete', [HeaderSliderController::class, 'destroy'])->name('headerSlider.delete');

//Product Routes
Route::get('products', [ProductController::class, 'index'])->name('product.index');
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('product/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('product/{id}/delete', [ProductController::class, 'destroy'])->name('product.delete');
Route::post('product/toggleStatus', [ProductController::class, 'toggleStatus'])->name('product.toggleStatus');

// CMS Routes
Route::get('cms', [CMSController::class, 'index'])->name('cms.index');
Route::get('cms/create', [CMSController::class, 'create'])->name('cms.create');
Route::post('cms/store', [CMSController::class, 'store'])->name('cms.store');
Route::get('cms/{id}/edit', [CMSController::class, 'edit'])->name('cms.edit');
Route::patch('cms/{id}/update', [CMSController::class, 'update'])->name('cms.update');
Route::delete('cms/{id}/delete', [CMSController::class, 'destroy'])->name('cms.delete');
Route::get('cms/{id}/view', [CMSController::class, 'show'])->name('cms.show');
Route::post('cms/toggleStatus', [CMSController::class, 'toggleStatus'])->name('cms.toggleStatus');

// Wishlist Routes
Route::post('wishlist/store', [WishlistController::class, 'store'])->name('wishlist.store');
Route::delete('wishlist/delete', [WishlistController::class, 'destroy'])->name('wishlist.delete');

// Cart Routes
Route::post('cart/store', [CartController::class, 'store'])->name('cart.store');
Route::patch('cart/update', [CartController::class, 'update'])->name('cart.update');
Route::delete('cart/delete', [CartController::class, 'destroy'])->name('cart.delete');

// Review Routes

// Cart Routes
Route::get('reviews/{productId}', [ReviewController::class, 'index'])->name('review.index');
Route::post('review/store', [ReviewController::class, 'store'])->name('review.store');
Route::patch('review/{id}/update', [ReviewController::class, 'update'])->name('review.update');
Route::delete('review/{id}/delete', [ReviewController::class, 'destroy'])->name('review.delete');

require __DIR__ . '/auth.php';
