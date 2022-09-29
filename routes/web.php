<?php


use App\Http\Controllers\auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoCOntroller;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\auth\AuthController;
use Illuminate\Http\Request;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('viewer.pages.index');
});

//auth
Route::get('login', [auth\AuthController::class,'index'])->name('login');
Route::post('login', [auth\AuthController::class,'loginprocess'])->name('validatelogin');




Route::get('registration', [auth\AuthController::class,'registration'])->name('registration');
Route::post('registration', [auth\AuthController::class,'registrationprocess'])->name('registrationprocess');
Route::get('logout', [auth\AuthController::class, 'logout'])->name('logout');


//Dashboard
Route::group(['middleware' => ['auth']], function() {


Route::get('dashboard', [auth\AuthController::class,'dashboard'])->name('dashboard');


//banner
// Route::get('banners', [ImageController::class,'bannerindex'])->name('bannerindex');
// Route::post('banners.create', [ImageController::class,'bannercreate'])->name('bannercreate');

// Route::resource('banners', ImageController::class);
Route::get('banners', [BannerController::class,'index'])->name('bannerindex');
Route::get('banners/add-new-banner', [BannerController::class,'create'])->name('bannercreate');
Route::post('banners/add-new-banner', [BannerController::class,'store'])->name('bannerstore');
Route::get('banners/banner-edit/{id}',[BannerController::class,'edit'])->name('banneredit');
Route::put('banners/banner-update/{id}',[BannerController::class,'update'])->name('bannerupdate');
Route::get('banners/banner-delete/{id}',[BannerController::class,'destroy'])->name('bannerdelete');


});

