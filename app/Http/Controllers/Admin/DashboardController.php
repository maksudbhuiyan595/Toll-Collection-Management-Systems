<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Payment;
use App\Models\Vehicle;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
{
    // Calculate the datetime 24 hours ago from now
    $twentyFourHoursAgo = Carbon::now()->subHours(24);

    // Get start of the current day
    $startOfDay = Carbon::now()->startOfDay();

    // Get current date
    $currentDate = Carbon::now();

    // Get payment data with relationships
    $paymentData = Payment::with(['payCategory', 'payVehicle', 'payChart', 'payCustomer', 'payToll'])
                         ->get();

    // Initialize daily, monthly, and yearly totals
    $dailyTotal = 0;
    $monthlyTotal = 0;
    $yearlyTotal = 0;
    $totalTollPrice = 0;
    $twentyFourHourTotal = 0;


    foreach ($paymentData as $payment) {
        $paymentDate = $payment->date;
        $totalTollPrice += $payment->payChart->toll_price;

        if ($paymentDate instanceof Carbon && $paymentDate->isSameDay($currentDate)) {
            $dailyTotal += $payment->payChart->toll_price;
        }

        if ($paymentDate instanceof Carbon && $paymentDate->gte($twentyFourHoursAgo)) {
            $twentyFourHourTotal += $payment->payChart->toll_price;
        }

        if ($paymentDate instanceof Carbon && $paymentDate->year === $currentDate->year) {
            $monthlyTotal += $payment->payChart->toll_price;
        }

        if ($paymentDate instanceof Carbon && $paymentDate->year === $currentDate->year) {
            $yearlyTotal += $payment->payChart->toll_price;
        }

    }

    $totalVehicle = Payment::count();
    $totalCategory = Category::count();

    return view('backend.admin.pages.dashboard', compact(
        'totalVehicle',
        'totalCategory',
        'dailyTotal',
        'monthlyTotal',
        'yearlyTotal',
        'totalTollPrice',
        'currentDate',
        'twentyFourHourTotal'
    ));
}


}
