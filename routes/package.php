<?php

use App\Http\Controllers\PackagesController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/packages-list',[PackagesController::class,'index'])->name('packages-list');
    Route::post('/packages-add', [PackagesController::class, 'store'])->name('packages-add');
    Route::get('/packages-create',[PackagesController::class,'create'])->name('packages-create');
    Route::get('/packages-edit/{id}',[PackagesController::class,'edit'])->name('packages-edit');
    Route::post('/packages-update',[PackagesController::class,'update'])->name('packages-update');
});

