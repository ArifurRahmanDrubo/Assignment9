<?php

use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\blogcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\portfoliocontrolller;
use App\Http\Controllers\servicecontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [homecontroller::class, 'home']);
Route::get('/home', [homecontroller::class, 'home'])->name('home');
Route::get('/about', [aboutcontroller::class, 'about'])->name('about');
Route::get('/portfolio', [portfoliocontrolller::class, 'portfolio'])->name('portfolio');
Route::get('/services', [servicecontroller::class, 'services'])->name('services');
Route::get('/blog', [blogcontroller::class, 'blog'])->name('blog');
Route::get('/contact', [contactcontroller::class, 'contact'])->name('contact');