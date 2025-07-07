<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontUserController;
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

//  Route::get('/', function () {
//      return view('front.home');
// });


//comment from
// Route::get('/user/register',[FrontUserController::class,'index'])->name('user.register');
// Route::post('/user/userAdd',[FrontUserController::class,'store'])->name('user.userAdd');

// Route::get('front/user/login',[FrontUserController::class,'show'])->name('front.user.login');
// Route::post('/user/userLogin',[FrontUserController::class,'frontUserLogin'])->name('user.userLogin');


// Route::middleware(['auth:front'])->group(function () {
//     Route::get('front/profile',[FrontUserController::class,'profile'])->name('front.profile');
//     Route::get('front/user/logout',[FrontUserController::class,'userLogout'])->name('front.user.logout');
// });


Route::get('/',[HomeController::class,'index'])->name('home-page');
Route::get('package-list/{id}',[HomeController::class,'packageList'])->name('packageslist');
Route::get('package-detail/{id}',[HomeController::class,'packageDetails'])->name('package-info');
Route::get('contact-us',[HomeController::class,'contact'])->name('contact-us');
Route::get('checkout',[HomeController::class,'checkout'])->name('checkout');

Route::post('getDistrictByDivision',[HomeController::class,'getDistrict'])->name('getDistrictByDivision');

Route::post('userRegistration',[HomeController::class,'registerUser'])->name('userRegistration');




// Route::get('/cart',[CartController::class,'index'])->name('cart.index');
// Route::get('/add-to-cart',[CartController::class,'addToCart'])->name('cartAdd');
// Route::post('cart-update',[CartController::class,'updateCart'])->name('cartUpdate');
// Route::post('/item-remove',[CartController::class,'itemRemove'])->name('removeFromCart');

Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/*
Route::get('/ugi-info', function () {
    phpinfo();
});*/


// Route::middleware(['auth','verified'])->group(function () {

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
