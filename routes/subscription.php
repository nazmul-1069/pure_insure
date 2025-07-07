<?php

use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/subscription-cycle-list',[SubscriptionController::class,'index'])->name('subscription-cycle-list');
    Route::post('/subscription-cycle-add', [SubscriptionController::class, 'store'])->name('subscription-cycle-add');
    Route::get('/subscription-cycle-create',[SubscriptionController::class,'create'])->name('subscription-cycle-create');
    Route::get('/subscription-cycle-edit/{id}',[SubscriptionController::class,'edit'])->name('subscription-cycle-edit');
    Route::post('/subscription-cycle-update/{id}',[SubscriptionController::class,'update'])->name('subscription-cycle-update');
    Route::post('/subscription-cycle-delete',[SubscriptionController::class,'delete'])->name('subscription-cycle-delete');

});

