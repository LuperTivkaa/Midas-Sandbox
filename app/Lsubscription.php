<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lsubscription extends Model
{
    //
      //relationship with user
      public function user(){
        return $this->belongsTo(User::class);
        }
    
        //loan relationship
        //Each loan subscription belongs to a loan
        public function loan(){
            return $this->belongsTo(Loan::class);
        }
    
        protected $dates = ['created_at', 'updated_at','loan_start_date','loan_end_date'];
}
