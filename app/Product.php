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
    //done // A product can have more than one product subscriptions
    public function psubscriptions(){
        return $this->hasMany(Psubscription::class);
    }
    
    protected $dates = ['created_at', 'updated_at'];
}
