<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductSubscription extends Model
{
    //relationship with user
        public function user(){
            return $this->belongsTo(User::class);
        }

        //relationship with products
        public function products(){
            return $this->belongsTo(Products::class);
        }

        protected $dates = ['created_at', 'updated_at','start_date','end_date'];
}
