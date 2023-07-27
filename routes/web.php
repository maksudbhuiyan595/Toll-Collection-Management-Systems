<?php

use App\Http\Controllers\Admin\BoothController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\TollController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TollChartController;
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

Route::get('/',[HomeController::class,'index'])->name('home');


/* user controller */
Route::get('admin/login',[UserController::class,'login'])->name('admin.login');
Route::post('admin/do-login',[UserController::class,'doLogin'])->name('admin.do-login');
/* user controlller */

Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){
    /* user controller */
    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

        /* start dashboar controller */
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

   /*  Route::get('/search',[DashboardController::class,'search'])->name('search');
 */
        /* end dashboar controller */
    

        /* start Category Controller  */
    Route::get('/category-index',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category-create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category-store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category-destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');
    
        /* end Categoroy Controller */

        
         /* start vehicle Controller  */
    Route::get('/vehicle-index',[VehicleController::class,'index'])->name('vehicle.index');
    Route::get('/vehicle-create',[VehicleController::class,'create'])->name('vehicle.create');
    Route::post('/vehicle-store',[VehicleController::class,'store'])->name('vehicle.store');
    Route::get('/vehicle-edit/{id}',[VehicleController::class,'edit'])->name('vehicle.edit');
    Route::post('/vehicle-update/{id}',[VehicleController::class,'update'])->name('vehicle.update');
    Route::get('/vehicle-destroy/{id}',[VehicleController::class,'destroy'])->name('vehicle.destroy'); 
    
        /* end vehicle Controller */

        /* start tollChart Controller  */
    Route::get('/toll-chart-index',[TollChartController::class,'index'])->name('toll-chart.index');
    Route::get('/toll-chart-create',[TollChartController::class,'create'])->name('toll-chart.create');
    Route::post('/toll-chart-store',[TollChartController::class,'store'])->name('toll-chart.store');
    Route::get('/toll-chart-edit/{id}',[TollChartController::class,'edit'])->name('toll-chart.edit');
    Route::post('/toll-chart-update/{id}',[TollChartController::class,'update'])->name('toll-chart.update');
    Route::get('/toll-chart-destroy/{id}',[TollChartController::class,'destroy'])->name('toll-chart.destroy');
        /* end tollChart Controller */


        /* start Customer Controller  */
    Route::get('/customer-index',[CustomerController::class,'index'])->name('customer.index');
    Route::get('/customer-create',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');
        /* end Customer Controller */

        /* start Toll Controller  */
    Route::get('/toll-index',[TollController::class,'index'])->name('toll.index');
    Route::get('/toll-create',[TollController::class,'create'])->name('toll.create');
    Route::post('/toll-store',[TollController::class,'store'])->name('toll.store');
   /*  Route::get('/toll-edit/{id}',[TollController::class,'edit'])->name('toll.edit');
    Route::post('/toll-update/{id}',[TollController::class,'update'])->name('toll.update');
    Route::get('/toll-delete/{id}',[TollController::class,'destroy'])->name('toll.destroy'); */
        /* end Toll Controller */

             /* start Payment Controller  */
    Route::get('/payment-index',[PaymentController::class,'index'])->name('payment.index');
    Route::get('/payment-create',[PaymentController::class,'create'])->name('payment.create');
    Route::post('/payment-store',[PaymentController::class,'store'])->name('payment.store');
    
        /* end Payment Controller */

        /* start Payment Controller  */
    Route::get('/booth-index',[BoothController::class,'index'])->name('booth.index');
    Route::get('/booth-create',[BoothController::class,'create'])->name('booth.create');
    Route::post('/booth-store',[BoothController::class,'store'])->name('booth.store');
        /* end Payment Controller */
});






