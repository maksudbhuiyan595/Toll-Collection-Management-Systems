<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Payment;
use App\Models\Vehicle;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Toll_chart;

class DashboardController extends Controller
{
    public function index()
{


    // Get payment data with relationships
    $paymentData = Payment::with(['payCategory', 'payVehicle', 'payChart', 'payCustomer', 'payToll'])
                         ->get();

    $totalTollPrice = 0;

    foreach ($paymentData as $payment) {
        $paymentDate = $payment->date;
        $totalTollPrice += $payment->payChart->toll_price;
    }

    $totalVehicle = Payment::count();
    $totalCategory = Category::count();
    $today=Payment::count();

    $latestPayment = Payment::latest()->first();
    $totalDailyCount = $latestPayment->daily_total;
    $lastUpdatedTimestamp = Payment::latest()->value('created_at');

    $latestMonthlyPayment = Payment::latest()->first();
    $monthlyTotal = $latestMonthlyPayment->monthly_total;

    $latestYearCount = Payment::latest()->first();
    $yearlyTotal =$latestYearCount->yearly_total;


    return view('backend.admin.pages.dashboard', compact(
        'totalVehicle',
        'totalCategory',
        'monthlyTotal',
        'yearlyTotal',
        'totalTollPrice',
<<<<<<< HEAD
        'currentDate',
        'twentyFourHourTotal',
        'today'
        
=======
        'totalDailyCount',
        'lastUpdatedTimestamp'
>>>>>>> refs/remotes/origin/main
    ));
}


}
