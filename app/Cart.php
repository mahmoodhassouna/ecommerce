<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $with=["product"];



    
    function product(){
        return $this->belongsTO(Product::class , "product_id");
    }
    
}
