<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\SliderController;

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

/*
/ ----------------------------
/    User Routes
/ ----------------------------
*/
Route::get('/', [FrontHomeController::class, 'index'])->name('home');
Route::get('/contact-form', [FrontHomeController::class, 'contact'])->name('contact-form');
Route::get('/informations', [FrontHomeController::class, 'informations'])->name('informations');
Route::get('/concepts', [FrontHomeController::class, 'concepts'])->name('concepts');
Route::get('/boutique', [FrontHomeController::class, 'shop'])->name('shop');
Route::post('/newsletter/subscribe', [FrontHomeController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('/collections-necryx/{type_id}', [FrontHomeController::class, 'collections'])->name('collections');
Route::get('/collections-necryx/item/{collection}', [FrontHomeController::class, 'collection'])->name('collection');
Route::get('/articles-necryx', [FrontHomeController::class, 'articles'])->name('articles');
Route::get('/articles-necryx/{article}', [FrontHomeController::class, 'article'])->name('article');
Route::get('policy', function () { return view('policy'); })->name('policy');

/*
/ ----------------------------
/    Admin Routes
/ ----------------------------
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'is_admin'
])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/admin/profile', function(){ return view('profile.show'); })->name('profile.admin');

    Route::resource('articles', ArticleController::class);
    Route::resource('types', TypeController::class);
    Route::resource('collections', CollectionController::class);
    Route::resource('tags', TagController::class);
    Route::resource('sliders', SliderController::class);
});

/*
/ ----------------------------
/    Special Routes
/ ----------------------------
*/
// Route::get('/503', function () { return view('errors.503'); })->name('503');
// Route::get('/500', function () { return view('errors.500'); })->name('500');
// Route::get('/404', function () { return view('errors.404'); })->name('404');
