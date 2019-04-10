<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Targetsaving extends Model
{
    //
    protected $fillable = [
      'user_id', 
      'amount', 
      'entry_date',
      'created_by',
  ];
      //Each saving belongs to a user
      public function user(){
        return $this->belongsTo(User::class);
    }

protected $dates = ['created_at', 'updated_at','start_date','entry_date','end_date'];

}
