<?php

namespace App\Models;


use App\Models\Category;
use App\Models\TollChat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toll extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function tollCategory(){
        return $this->belongsTo(Category::class,'toll_category_id','id');
    }
   public function tollChart(){
        return $this->belongsTo(Toll_chart::class,'toll_chart_id', 'id');
    
}
}