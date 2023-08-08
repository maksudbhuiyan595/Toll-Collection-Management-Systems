<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BoothController;
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


/* UserController */
Route::get('admin/login',[UserController::class,'login'])->name('admin.login');
Route::post('admin/do-login',[UserController::class,'doLogin'])->name('admin.do-login');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){

    /* UserController */
    Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');

        /* DashboardController */
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    // Route::get('/search',[DashboardController::class,'search'])->name('search');

       
    

        /* CategoryController  */
    Route::get('/category-index',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category-create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category-store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/category-destroy/{id}',[CategoryController::class,'destroy'])->name('category.destroy');
   
     /* toll-ChartController  */
    Route::get('/toll-chart-index',[TollChartController::class,'index'])->name('toll-chart.index');
    Route::get('/toll-chart-create',[TollChartController::class,'create'])->name('toll-chart.create');
    Route::post('/toll-chart-store',[TollChartController::class,'store'])->name('toll-chart.store');
    Route::get('/toll-chart-edit/{id}',[TollChartController::class,'edit'])->name('toll-chart.edit');
    Route::post('/toll-chart-update/{id}',[TollChartController::class,'update'])->name('toll-chart.update');
    Route::get('/toll-chart-destroy/{id}',[TollChartController::class,'destroy'])->name('toll-chart.destroy');

         /* vehicleController  */
    Route::get('/vehicle-index',[VehicleController::class,'index'])->name('vehicle.index');
    Route::get('/vehicle-create',[VehicleController::class,'create'])->name('vehicle.create');
    Route::post('/vehicle-store',[VehicleController::class,'store'])->name('vehicle.store');
    Route::get('/vehicle-edit/{id}',[VehicleController::class,'edit'])->name('vehicle.edit');
    Route::post('/vehicle-update/{id}',[VehicleController::class,'update'])->name('vehicle.update');
    Route::get('/vehicle-destroy/{id}',[VehicleController::class,'destroy'])->name('vehicle.destroy'); 

        /* CustomerController  */
    Route::get('/customer-index',[CustomerController::class,'index'])->name('customer.index');
    Route::get('/customer-create',[CustomerController::class,'create'])->name('customer.create');
    Route::post('/customer-store',[CustomerController::class,'store'])->name('customer.store');
    Route::get('/customer-edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/customer-update/{id}',[CustomerController::class,'update'])->name('customer.update');
    Route::get('/customer-destroy/{id}',[CustomerController::class,'destroy'])->name('customer.destroy');

        /* TollController  */
    Route::get('/collection-index',[TollController::class,'index'])->name('collection.index');
    Route::get('/collection-create',[TollController::class,'create'])->name('collection.create');
    Route::post('/collection-store',[TollController::class,'store'])->name('collection.store');
    Route::get('/collection-edit/{id}',[TollController::class,'edit'])->name('collection.edit');
    Route::post('/collection-update/{id}',[TollController::class,'update'])->name('collection.update');
    Route::get('/collection-delete/{id}',[TollController::class,'destroy'])->name('collection.destroy'); 

        /*PaymentController  */
    Route::get('/payment-index',[PaymentController::class,'index'])->name('payment.index');
    Route::get('/payment-create',[PaymentController::class,'create'])->name('payment.create');
    Route::post('/payment-store',[PaymentController::class,'store'])->name('payment.store');
    Route::get('/payment-cashOn',[PaymentController::class,'cashOn'])->name('payment.cashOn'); 
    Route::get('/payment-do-cash',[PaymentController::class,'doCash'])->name('payment.doCash');
    Route::get('/payment-view-cash/{id}',[PaymentController::class,'viewCash'])->name('payment.viewCash');
    Route::get('/payment-edit/{id}',[PaymentController::class,'edit'])->name('payment.edit');
    Route::post('/payment-update/{id}',[PaymentController::class,'update'])->name('payment.update');
    Route::get('/payment-delete/{id}',[PaymentController::class,'destroy'])->name('payment.destroy');
   
    /* Report section
           --/ Category Report--*/
    Route::get('/category-report',[CategoryController::class,'categoryReport'])->name('category.report');
    Route::get('/category-search-report',[CategoryController::class,'categoryReportSearch'])->name('categrory.report.search');

            /* Vehicle report */
        Route::get('/vehicle-report',[VehicleController::class,'vehicleReport'])->name('vehicle.report');
        Route::get('/vehicle-search-report',[VehicleController::class,'vehicleReportSearch'])->name('vehicle.report.search');

                /* Toll-chart report */
            Route::get('/toll-chart-report',[TollChartController::class,'tollChartReport'])->name('tollChart.report');
            Route::get('/toll-chart-search-report',[TollChartController::class,'tollChartReportSearch'])->name('tollChart.report.search');
                    
                    /* Customer report */
                Route::get('/customer-report',[CustomerController::class,'customerReport'])->name('customer.report');
                Route::get('/customer-search-report',[CustomerController::class,'customerReportSearch'])->name('customer.report.search');

                    /* Collection report */
                    Route::get('/collection-report',[TollController::class,'collectionReport'])->name('collection.report');
                    Route::get('/collection-search-report',[TollController::class,'collectionReportSearch'])->name('collection.report.search');

                     /* payment report */
                     Route::get('/payment-report',[PaymentController::class,'paymentReport'])->name('payment.report');
                     Route::get('/payment-search-report',[PaymentController::class,'paymentReportSearch'])->name('payment.report.search');

                            /* end report section */

});