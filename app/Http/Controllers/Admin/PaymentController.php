<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Toll;
use App\Models\Toll_chart;
use App\Models\Vehicle;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $paymentData = Payment::with(['payCategory', 'payVehicle', 'payChart', 'payCustomer', 'payToll'])->paginate(100);

        // Calculate the total toll price
        $totalTollPrice = 0; // Initialize the total

        foreach ($paymentData as $payment) {
            $totalTollPrice += $payment->payChart->toll_price;
        }


    //    dd($paymentData);

        return view('backend.admin.pages.payments.payIndex', compact('paymentData'));
    }
    public function create()
    {
        $payTolls=Toll::all();
        $payCustomers=Customer::all();
        $payTollCharts=Toll_chart::all();
        $payVehicles=Vehicle::all();
        $payCategories=Category::all();

        return view('backend.admin.pages.payments.payCreate',compact('payCategories','payVehicles','payTollCharts','payCustomers','payTolls'));
    }

    public function store(Request $request)
{
    $request->validate([
        'date'              => 'required',
        'pay_category_id'   => 'required',
        'pay_vehicle_id'    => 'required',
        'pay_chart_id'      => 'required',
        'pay_customer_id'   => 'required',
        'pay_toll_id'       => 'required',
    ]);

    $selectedChart = Toll_chart::find($request->pay_chart_id);
    // Retrieve the toll_price from the selected chart
    $tollPrice = $selectedChart->toll_price;

    // Store payment details in the database
    $payment = Payment::create([
        'date'              => $request->date,
        'pay_category_id'   => $request->pay_category_id,
        'pay_vehicle_id'    => $request->pay_vehicle_id,
        'pay_chart_id'      => $request->pay_chart_id,
        'pay_customer_id'   => $request->pay_customer_id,
        'pay_toll_id'       => $request->pay_toll_id,
        'toll_price'        => $tollPrice,
    ]);

    // Update daily, monthly, and yearly totals
    $today = now()->format('Y-m-d');
    $this->updateTotals($payment, $today);

    Toastr::success('Successfully Created', 'Payment');
    return redirect()->back();
}

protected function updateTotals($payment, $date)
{
    $dailyTotal = Payment::whereDate('created_at', $date)->sum('toll_price');

    $monthlyTotal = Payment::whereYear('created_at', now()->year)
                            ->whereMonth('created_at', now()->month)
                            ->sum('toll_price');
    $yearlyTotal = Payment::whereYear('created_at', now()->year)->sum('toll_price');

    $payment->update([
        'daily_total'   => $dailyTotal,
        'monthly_total' => $monthlyTotal,
        'yearly_total'  => $yearlyTotal,
    ]);
}

    public function show($id){

        $payment=Payment::find($id);
        // dd($payment);
        return view('backend.admin.pages.payments.payShow',compact('payment'));

    }



    public function paymentReport()
    {
        return view('backend.admin.pages.payments.payReport');
    }

    public function  paymentReportSearch(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'form_date'=>'required|date',
            'to_date'=>'required|date|after:form_date'
        ]);
        $form=$request->form_date;
        $to= $request->to_date;


        $paymentReports=Payment::whereBetween('created_at',[$form,$to])->get();

        // dd($reportCategory);

        return view('backend.admin.pages.payments.payReport',compact('paymentReports'));
}

}
