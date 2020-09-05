<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    protected $fillable=['FoodName','FoodPrice','FoodImage','FoodCategory'];
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
