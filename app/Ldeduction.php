<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldeduction extends Model
{
    
     //Each loan deduction belongs to a user
     public function user(){
        return $this->belongsTo(User::class);
    }

    //Each loan deduction belongs to a loan subscription
    public function loansubscription(){
        return $this->belongsTo(Lsubscription::class);
    }
}
