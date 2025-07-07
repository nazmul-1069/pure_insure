<?php
    use App\Http\Controllers\PackageDetailController;
    use Illuminate\Support\Facades\Route;

    Route::middleware('auth')->group(function () {
        Route::get('/package-detail-list',[PackageDetailController::class,'index'])->name('package-detail-list');
        Route::get('/package-detail-create',[PackageDetailController::class,'create'])->name('package-detail-create');
        Route::post('/package-detail-add', [PackageDetailController::class, 'store'])->name('package-detail-add');

    });

?>
