<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ldeduction extends Model
{
    //
     //Each saving belongs to a user
     public function user(){
        return $this->belongsTo(User::class);
    }
}
