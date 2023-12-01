<?php

use App\Http\Controllers\dashboard\indexController;
use Illuminate\Support\Facades\Route;



// prefix is "dashboard"

Route::get('/admin', [indexController::class,'index'])->name('admin');
