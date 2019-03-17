<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    //relationship with products
    //A particular loan can have more than one subscriptions
    public function loansubscriptions(){
        return $this->hasMany(Lsubscription::class);
    }
}
