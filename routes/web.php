<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPages;

//Route::get('/', function () {
  //  return view('home');
//});



Route::get('/', [FrontPages::class, 'home'])->name('home');
Route::get('home', [FrontPages::class, 'home'])->name('home');
Route::get('shop', [FrontPages::class, 'shop'])->name('shop');
Route::get('about', [FrontPages::class, 'about'])->name('about');
Route::get('offer', [FrontPages::class, 'offer'])->name('offer');
Route::get('blog', [FrontPages::class, 'blog'])->name('blog');
Route::get('client', [FrontPages::class, 'client'])->name('client');





