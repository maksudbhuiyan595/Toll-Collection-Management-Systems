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


            $paymentData = Payment::with(['payCategory', 'payVehicle', 'payChart', 'payCustomer', 'payToll'])
            ->get();

        $totalTollPrice = 0;

        foreach ($paymentData as $payment) {
        if ($payment->payChart) {
        $totalTollPrice += $payment->payChart->toll_price;
        }
        }

        $totalVehicle = Vehicle::count();
        $totalCategory = Category::count();

        $latestPayment = Payment::latest()->first();
        $totalDailyCount = $latestPayment ? $latestPayment->daily_total : 0;
        $lastUpdatedTimestamp = $latestPayment ? $latestPayment->created_at : null;

        $latestMonthlyPayment = Payment::latest()->first();
        $monthlyTotal = $latestMonthlyPayment ? $latestMonthlyPayment->monthly_total : 0;

        $latestYearCount = Payment::latest()->first();
        $yearlyTotal = $latestYearCount ? $latestYearCount->yearly_total : 0;

        return view('backend.admin.pages.dashboard', compact(
        'totalVehicle',
        'totalCategory',
        'monthlyTotal',
        'yearlyTotal',
        'totalTollPrice',
        'totalDailyCount',
        'lastUpdatedTimestamp'
        ));
        }
        }
