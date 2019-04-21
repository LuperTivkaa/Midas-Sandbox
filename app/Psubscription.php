<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Savingreview;
use App\Psubscription;
use App\Lsubscription;

class Psubscription extends Model
{
    
    //relationship with user
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relationship with products
    //Done ; Each product subscription belongs to a product
    public function product(){
        return $this->belongsTo(Product::class);
    }

  

    protected $dates = ['created_at', 'updated_at','start_date','end_date'];


    //all product subscriptions
    public static function allProductSubscriptions(){

        // return  $this::where('status', 'Active')
        // ->where(function ($query) {
        //     $query->where('status', '=', 'Active');
        // })->with(['user','product'])
        // ->paginate(50);
        return  static::where('status', 'Active')
        ->with(['user','product'])
        ->get();
    }

    // Product subscriptionn item details
    public static function itemDetails($id){
        return static::find($id);
    } 

     //User active product subscriptions
     public static function userProducts($id){

        return static::where('user_id', '=', $id)
        ->where(function ($query) {
            $query->where('status', '=', 'Active');
        })->with(['product','user'])->orderBy('start_date','desc')
        ->get();
        
    }

    //User Pending product subscriptions
     public static function pendingProducts($id){

        return static::where('user_id', '=', $id)
        ->where(function ($query) {
            $query->where('status', '=', 'Pending');
        })
        ->with(['product','user'])
        ->orderBy('start_date','desc')
        ->get();
        
    }

     //All pending subscriptions
     public static function pendingSubs(){

        return static::where('status','Pending')
        ->oldest()
        
        ->with(['product','user'])
        ->paginate(100);
        }

        //All active subscriptions
        public static function activeSubs(){
            return static::where('status','Active')
            ->orderBy('user_id','asc')
            ->orderBy('start_date','asc')
            ->with(['product','user'])
            ->paginate(100);
            }

}
