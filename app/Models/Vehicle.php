<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function vehicleData(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
