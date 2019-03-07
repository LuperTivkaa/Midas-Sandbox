<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
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
    public function productsubscriptions(){
        return $this->hasMany(ProductSubscription::class);
    }

    protected $dates = ['created_at', 'updated_at'];
}
