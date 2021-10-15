<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $with=["products" ,"customer","shipping","taxes"];

    protected $fillable=[ "customer_id", "address", "total_price","shipping_price","taxes_price"];


    
    function products(){
        return $this->hasMany(OrderDetailes::class , "order_id");
    }

    function customer(){
        return $this->belongsTo(User::class , "customer_id");
    }
    function shipping(){
        return $this->belongsTo(User::class , "shipping_price");
    }
    function taxes(){
        return $this->belongsTo(User::class , "taxes_price");
    }
}
