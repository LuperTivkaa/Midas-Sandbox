<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    //relationship with products
    public function loansubscription(){
        return $this->hasMany(LoanSubscription::class);
    }
}
