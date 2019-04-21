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
        //A loan subscription may have many deductions
        public function loandeductions(){
          return $this->hasMany(Ldeduction::class);
      }
    
        protected $dates = ['created_at', 'updated_at','loan_start_date','loan_end_date'];

        
        //User Active loans
    public static function activeLoans($id){
        return static::where('user_id',$id)
        ->where(function ($query){
            $query->where('loan_status','Active');
        })->with(['loan' => function ($query) {
        $query->orderBy('description', 'desc');
        }])->get();
      }
      //User pending loans
public static function pendingLoans($id){
  return static::where('user_id',$id)
        ->where(function ($query){
            $query->where('loan_status','=','Pending');
        })->with(['loan' => function ($query) {
        $query->orderBy('description', 'desc');
        }])->get();
}

      
}
