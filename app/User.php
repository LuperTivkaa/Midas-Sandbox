<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'payment_number', 'password','email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['created_at', 'updated_at','dob'];


    //Define relationship with roles
    public function roles(){
        return $this->belongsToMany(Role::class,'role_users');
    }

    //define relationship with next of kin
    public function nok(){
        return $this->hasOne(Nok::class);
    }

    //define relationship with user bank details
    public function bank(){
        return $this->hasOne(Bank::class);
    }

    //Define relationship with product subscription
    //done; A user has many product subscriptions
    public function psubscriptions(){
        return $this->hasMany(Psubscription::class);
    }
    //User relationship with loan subscriptions
    //User has many subscriptions
     public function loansubscriptions(){
        return $this->hasMany(Lsubscription::class);
    }

    //Relationship with Target Savings Review
    public function tsreviews(){
        return $this->hasMany(Targetsr::class);
    } 

    //Relationship with Target Saving
    public function targetsavings(){
        return $this->hasMany(Targetsaving::class);
    }

    //Relationship with Saving
    public function savings(){
        return $this->hasMany(Saving::class);
    }

    //Relationship with saving reviews
    public function savingreviews(){
        return $this->hasMany(Savingreview::class);
    }

     //Relationship with loan deductions
     public function loandeductions(){
        return $this->hasMany(Ldeduction::class);
    }


    //Define relationship with loan subscription
    // public function loansubscriptions(){
    //     return $this->hasMany(LoanSubscription::class);

    // }

    //has access method used in authserviceprovider
    public function hasAccess(array $permissions)
    {
        foreach($this->roles as $roles){
            if($role->hasAccess($permissions)){
                return true;
            }
        }
        return false;
    }

    public function inRole($name){
        return $this->roles()->where('name',$name)
        ->count()==1;
    }

    public function checkRole(){
        return $this->roles()->pluck('name')->count()>=1;
    }
}
