<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\DesiginsController;
use App\Http\Controllers\Admin\ReservationsController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\UserReservationController;
use App\Http\Controllers\UserItemsController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\ProfileEditController;
use App\Http\Controllers\fieldsController;





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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('Admin.welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/',[MasterController::class,'index'])->name('puplicUser.welcome');
Route::get('/fields',[categoryController::class,'index'])->name('puplicUser.fields');
Route::get('/reservation',[reservationController::class,'index'])->name('puplicUser.reservation');
Route::get('/register',[registerController::class,'index'])->name('puplicUser.register');
Route::get('/login',[loginController::class,'index'])->name('puplicUser.login');



Route::get('/about', function () {
    return view('puplicUser.about');
});
Route::get('/contact', function () {
    return view('puplicUser.contact');
});
Route::get('/UserProfile',function(){
    return view('puplicUser.userprofile');
});
Route::get('/Edit',function(){
    return view('puplicUser.userprofileEdit');
});
Route::get('singleItem',function(){
    return view('singleItem');
});

