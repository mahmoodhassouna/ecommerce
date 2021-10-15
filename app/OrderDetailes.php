<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetailes extends Model
{
    protected $with=["product"];

    protected $fillable=["product_id", "order_id", "Quantity", "price", "total_price"];

    
    function product(){
        return $this->hasOne(Product::class , "id", "product_id");
    }
}
