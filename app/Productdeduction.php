<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productdeduction extends Model
{
    //
    protected $fillable = [
        'user_id', 
        'psubscription_id', 
        'entry_date',
        'uploaded_by',
    ];

    protected $dates = ['created_at', 'updated_at','entry_date'];

    //Each saving belongs to a user
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Each deduction belongs to a product subscription
    //function stub here
}
