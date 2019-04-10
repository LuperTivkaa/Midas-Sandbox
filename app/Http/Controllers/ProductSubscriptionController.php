<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Psubscription;

class ProductSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //List all Subscriptions
        $title ='All Product Subscriptions';
        $prod = Product::withCount('psubscriptions')->paginate(5);
        return view('ProductSub.index',compact('prod','title'));
        // $users = DB::table('users')
        //              ->select(DB::raw('count(*) as user_count, status'))
        //              ->where('status', '<>', 1)
        //              ->groupBy('status')
        //              ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //New Subscription from
        $title ='New Product Subscription';
        return view('ProductSub.create',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //Save product subscription
            $this->validate(request(), [
                'product' =>'required|integer',
                'payment_id'=>'required|integer',
                'units' =>'required|integer',
                ]);
    
                if(User::where('payment_number',request(['payment_id']))->exists())
                {
                    $user = User::where('payment_number',request(['payment_id']))->first();
                    $user_id = $user->id;
                    $product_sub = new Psubscription();
                    $product_sub->user_id = $user_id;
                    $product_sub->product_id = $request['product'];
                    $product_sub->units = $request['units'];
                    $product_sub->start_date = $request['start_date'];
                    $product_sub->end_date = $request['end_date'];
                    $product_sub->staff_id = auth()->id();
                    $product_sub->save();
                    if($product_sub->save()) {
                        toastr()->success('Product Subscription has been saved successfully!');
                        return redirect('/subscriptions');
                    }
                
                    toastr()->error('An error has occurred trying to create a subscription.');
                    return back();
                }
            toastr()->error('No user exist with this payment identification number.');
            return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Display detail product subscription listings
          $title ='Detail Product Subscriptions';
          $subs = Psubscription::where('product_id',$id)->with(['product' => function ($query) {
            $query->orderBy('name', 'desc');
        }])->paginate(10);
          
          return view('ProductSub.subscriptionDetails',compact('subs','title'));
    }


    //Show individual user subscriptions
    public function userSubscriptions($id){
        $title = "User Subscriptions";
        $userProducts = Psubscription::where('user_id',$id)->with(['product' => function ($query) {
            $query->orderBy('name', 'desc');
        }])->paginate(10);

        return view('ProductSub.userProducts',compact('userProducts','title'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * Show the form for editing a subscription
     */
    public function edit($id)
    {
        //
        $title ='Edit Product Subscription';
        $product = Psubscription::find($id);
        return view('ProductSub.editSubscription',compact('product','title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        //Save product subscription
        $this->validate(request(), [
            'product' =>'required|integer',
            'payment_id'=>'required|integer',
            'units' =>'required|integer',
            ]);

            if(User::where('payment_number',request(['payment_id']))->exists())
            {
                $user = User::where('payment_number',request(['payment_id']))->first();
                $user_id = $user->id;
                $product_sub = Psubscription::find($id);
                $product_sub->user_id = $user_id;
                $product_sub->product_id = $request['product'];
                $product_sub->units = $request['units'];
                $product_sub->start_date = $request['start_date'];
                $product_sub->end_date = $request['end_date'];
                $product_sub->staff_id = auth()->id();
                $product_sub->save();
                if($product_sub->save()) {
                    toastr()->success('Product Subscription updated successfully!');
                    return redirect('/subscriptions');
                }
            
                toastr()->error('An error has occurred trying to update user subscription.');
                return back();
            }
        toastr()->error('No user exist with this payment identification number.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete Product Subscription
        $dlt = Psubscription::find($id)->delete();
        if($dlt) {
            toastr()->success('Product subscription deleted successfully!');
            return redirect('/subscriptions');
        }
    
        toastr()->error('An error has occurred trying to delete user subscription.');
        return back();
    }
}
