<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = [
        'name',
        'description', 
        'permissions',
        
   ];
//Define relationships with Users
public function users(){
    return $this->belongsToMany(User::class,'role_users');

}
}
