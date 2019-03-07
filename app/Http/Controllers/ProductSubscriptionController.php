<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $subs = ProductSubscription::all();
        return view('ProductSub.index',compact('subs','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //New Subscription from
        $title ='New Product Subscriptions';
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
            'product_name' =>'required|string',
            'description'=>'required|string',
            'unit_cost' =>'required|decimal|integer',
            ]);
            
            $user = User::where('payment_number',request(['payment_number']))->firstOrFail();
            $user_id = $user->id;

            $product_sub = new ProductSubscription();
            $product->title = $request['product_name'];
            $product->gender = $request['description'];
            $product->relationship = $request['unit_cost'];
    
            $product->save();
        
            if($product->save()) {
                toastr()->success('Product has been saved successfully!');
        
                return view('Products.index',compact('profile','title'));
            }
        
            toastr()->error('An error has occurred trying to save, please try again later.');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
