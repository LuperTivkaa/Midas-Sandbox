<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psubscription extends Model
{
    
    //relationship with user
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relationship with products
    //Done ; Each product subscription belongs to a product
    public function product(){
        return $this->belongsTo(Product::class);
    }

    protected $dates = ['created_at', 'updated_at','start_date','end_date'];
}
