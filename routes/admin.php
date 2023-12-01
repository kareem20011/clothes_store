<?php

use App\Http\Controllers\dashboard\indexController;
use App\Http\Controllers\dashboard\settingController;
use Illuminate\Support\Facades\Route;



// prefix is "dashboard"

Route::get('/admin', [indexController::class,'index'])->name('admin');
Route::put('settings/update/',[settingController::class,'update'])->name('dashboard.settings.update');
