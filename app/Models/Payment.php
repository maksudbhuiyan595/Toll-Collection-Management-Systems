<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function payCategory()
    {
        return $this->belongsTo(Category::class,'pay_category_id', 'id');
    }
    public function payVehicle()
    {
        return $this->belongsTo(Vehicle::class,'pay_vehicle_id', 'id');
    }
    public function payChart()
    {
        return $this->belongsTo(Toll_chart::class,'pay_chart_id', 'id');
    }
    public function payCustomer()
    {
        return $this->belongsTo(Customer::class,'pay_customer_id', 'id');
    }
    public function payToll()
    {
        return $this->belongsTo(Toll::class,'pay_toll_id', 'id');
    }
}
