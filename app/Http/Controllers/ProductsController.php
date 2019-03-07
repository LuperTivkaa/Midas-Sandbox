<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //List all products
        $title ='All Products';
        $products = Products::orderBy('name','asc')->paginate(10);
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
        $title ="Product List";
        //Save product
        $this->validate(request(), [
        'product_name' =>'required|string',
        'description'=>'required|string',
        'unit_cost' =>'required|numeric|betwween:0.00,999999999.99',
        ]);
        

        $product = new Products();
        $product->name = $request['product_name'];
        $product->description = $request['description'];
        $product->unit_cost = $request['unit_cost'];

        $product->save();
    
        if($product->save()) {
            toastr()->success('Product has been saved successfully!');
    
            return view('Products.newProduct',compact('title'));
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
        $title ='Product Detail';
        $product = Products::find($id);
        return view('Products.productDetail',compact('product','title'));
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
        $title ='Edit Product';
        $product = Products::find($id);
        return view('Products.editProducts',compact('product','title'));
        
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
        $title ="Product Detail";
        $this->validate(request(), [
            'product_name' =>'required|string',
            'description'=>'required|string',
            'unit_cost' =>'required|numeric|between:0.00,999999999.99',
        ]);

        $product = Products::find($id);
        $product->name = $request['product_name'];
        $product->description = $request['description'];
        $product->unit_cost = $request['unit_cost'];
        $product->save();

        //$products = Products::find($id);
        //return view('Products.editProducts',compact('products','title'));
         //find user
        // $userid = $nokUpdate->user_id;
        // $profile = User::find($userid);
        if ($product->save()) {
            toastr()->success('Data has been edited successfully!');
    
            return view('Products.productDetail',compact('product','title'));
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
