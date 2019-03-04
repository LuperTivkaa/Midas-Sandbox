<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //List all candidates
        $title ='All Product';
        $products = Products::all();
        return view('Products.index',compact('products','title'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Form for creating a new product
        $title ='New Product'; 
        return view('Products.newProduct',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Save product
        $this->validate(request(), [
        'product_name' =>'required|string',
        'description'=>'required|string',
        'unit_cost' =>'required|decimal|integer',
        ]);
        

        $product = new Products();
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
        $products = Products::find($id);
        $title ='Edit Product';
        return view('Products.editProducts',compact('products','title'));
        
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
        $title ="All Products";
        $this->validate(request(), [
            'product_name' =>'required|string',
            'description'=>'required|string',
            'unit_cost' =>'required|decimal|integer',
        ]);

        $product = Products::find($id);
        $product->product_name = $request['product_name'];
        $product->description = $request['description'];
        $product->unit_cost = $request['unit_cost'];
        $product->save();


        $products = Products::find($id);
        $title ='Edit Product';
        return view('Products.editProducts',compact('products','title'));
         //find user
        $userid = $nokUpdate->user_id;
        $profile = User::find($userid);
        if ($nokUpdate->save()) {
            toastr()->success('Data has been edited successfully!');
    
            return view('Users.userView',compact('profile','title'));
        }
    
        toastr()->error('An error has occurred trying to update, please try again later.');
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
        //
        $products = Products::find($id);
        $product->delete();
        if ($product->delete()) {
            toastr()->success('Data has been deleted successfully!');
    
            return view('Users.index',compact('profile','title'));
        }
    
        toastr()->error('An error has occurred trying to update, please try again later.');
        return back();
    }
}
