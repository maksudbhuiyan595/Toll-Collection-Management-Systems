<?php

use App\Http\Controllers\Admiln\LoginController as AdmilnLoginController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\TollController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FrontendController\HomeController;
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
Route::get('admin/login',[LoginController::class,'login'])->name('admin.login');


Route::group(['prefix'=>'admin'],function(){

        /* start dashboar controller */
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
        /* end dashboar controller */

        /* start Category Controller  */
    Route::get('/category-index',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category-create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category-store',[CategoryController::class,'store'])->name('category.store');
        /* end Categoroy Controller */

        /* start vehicle Controller  */
    Route::get('/vehicle-index',[VehicleController::class,'index'])->name('vehicle.index');
    Route::get('/vehicle-create',[VehicleController::class,'create'])->name('vehicle.create');
    Route::post('/vehicle-store',[VehicleController::class,'store'])->name('vehicle.store');
        /* end vehicle Controller */

        /* start Customer Controller  */
    Route::get('/customer-index',[CustomerController::class,'index'])->name('customer.index');
    Route::get('/customer-create',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');
        /* end Customer Controller */

        /* start Toll Controller  */
    Route::get('/toll-index',[TollController::class,'index'])->name('toll.index');
    Route::get('/toll-create',[TollController::class,'create'])->name('toll.create');
    Route::post('/toll-store',[TollController::class,'store'])->name('toll.store');
        /* end Toll Controller */
});






