<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $with=["category_obj",'vendor_id'];
   


     
    public function vendor_id()
    {
        return $this->belongsTo('App\User','created_by');
    }
    function category_obj(){
        return $this->belongsTO(Category::class , "category")->withDefault(["name"=>"-"]);
    }
}
