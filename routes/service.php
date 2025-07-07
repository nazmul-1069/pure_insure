<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/service-list',[ServiceController::class,'index'])->name('service-list');
    Route::post('/service-add', [ServiceController::class, 'store'])->name('service-add');
    Route::get('/service-create',[ServiceController::class,'create'])->name('service-create');
    Route::get('/service-edit/{id}',[ServiceController::class,'edit'])->name('service-edit');
    Route::post('/service-update/{id}',[ServiceController::class,'update'])->name('service-update');
    Route::post('/delete-service',[ServiceController::class,'delete'])->name('delete-service');
});

