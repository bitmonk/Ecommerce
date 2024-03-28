<?php

use App\Http\Controllers\Backend\CarouselController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Frontend\FrontendController;
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

Route::get('/',[FrontendController::class,'home'])->name('home');


Route::prefix('dashboard')->group(function(){
    Route::get('home',[PageController::class,'dashboard'])->name('dashboard');
    // CAROUSELS ROUTE START
    Route::get('carousel',[CarouselController::class,'carousel'])->name('carousel.index');
    Route::get('carousel/create',[CarouselController::class,'carouselCreate'])->name('carousel.create');
    Route::post('carousel/create',[CarouselController::class,'carouselStore'])->name('carousel.store');
    Route::get('carousel-active/{id}',[CarouselController::class,'ActiveShow'])->name('carousel.active');
    Route::get('carousel-deactive/{id}',[CarouselController::class,'deactive'])->name('carousel.deactive');
    // CAROUSELS ROUTE END


});

