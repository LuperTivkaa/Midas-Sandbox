<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'description', 
        // 'lastname',
        // 'email',
        // 'password',
    ];
    //Define relationship with product subscription
    //A product can have more than one product subscriptions
    public function psubscriptions(){
        return $this->hasMany(Psubscription::class);
    }

    //A product can have more than one product deductions
    public function pdeductions(){
        return $this->hasMany(Productdeduction::class);
    }
    

    //List all products
    public static function  productList(){
        return static::orderBy('name')->pluck('name','id');
    }
    
    protected $dates = ['created_at', 'updated_at'];
}
