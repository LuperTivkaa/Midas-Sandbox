<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanSubscription extends Model
{
    //
    //relationship with user
    public function user(){
    return $this->belongsTo(User::class);
    }

    //loan relationship
    
    public function loan(){
        return $this->belongsTo(Loan::class);
    }
}
