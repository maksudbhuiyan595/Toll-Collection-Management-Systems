<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TollChat extends Model
{
    use HasFactory;
    protected $guarded=[];

   public function tollData(){
    return $this->belongsTo(Category::class,'category_id','id');
   }
}
