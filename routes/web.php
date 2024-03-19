<?php

use App\Http\Controllers\Deneme_1Controller;

use App\Http\Controllers\DenemeController;
use Illuminate\Support\Facades\Route;




//Route::get('/',[DenemeController::class,'index']);
Route::get('/anasayfa',[DenemeController::class,'homePage'])->name('homePage');
Route::get('/hakkimda',[DenemeController::class,'hakkimizda'])->name('about');
Route::get('/cv',[DenemeController::class,'cv'])->name('cv');
Route::get('/iletisim',[DenemeController::class,'iletisim'])->name('contact');



