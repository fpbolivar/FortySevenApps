<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\MainController;

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

Route::get('/authanticate-request-url/{email}/{password}',[MainController::class,'AuthanticateRequestUrl']);
Route::get('/',[MainController::class,'Index'])->name('home');
Route::get('/contact-us',[MainController::class,'Contact'])->name('contact');
Route::post('/contact-us',[MainController::class,'ContactEmail'])->name('contact.mail');
Route::get('/about-us',[MainController::class,'About'])->name('about');
Route::get('/products',[MainController::class,'Products'])->name('products');
Route::get('/products/{id}',[MainController::class,'SingleProduct'])->name('single.product');
