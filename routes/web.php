<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\FrontHomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\FrontCollectionController;
use App\Http\Controllers\FrontInformationController;
use App\Http\Controllers\FrontConceptController;

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
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::post('/contact-form',[FrontConceptController::class,'contact'])->name('contact-form');
Route::get('/collections-necryx/{type}',[FrontCollectionController::class,'index'])->name('collections');
Route::get('/collections-necryx/item/{collection}',[FrontCollectionController::class,'show'])->name('collection');
Route::get('/informations',[FrontInformationController::class,'index'])->name('informations');
Route::get('/concepts',[FrontConceptController::class,'index'])->name('concepts');

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
    Route::get('/admin/profile', function(){ return view('profile.show-admin'); })->name('profile.admin');

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
Route::get('/503', function () { return view('errors.503'); })->name('503');
// Route::get('/500', function () { return view('errors.500'); })->name('500');
// Route::get('/404', function () { return view('errors.404'); })->name('404');
