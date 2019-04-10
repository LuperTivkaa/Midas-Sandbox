<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    //

    protected $fillable = [
        'user_id', 
        'amount_saved', 
        'entry_date',
        'created_by',
    ];

    protected $dates = ['created_at', 'updated_at','entry_date'];

    //Each saving belongs to a user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
