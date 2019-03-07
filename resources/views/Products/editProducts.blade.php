@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col s12 subject-header">
            <p class="teal-text">Edit Product</p>
            <span><a href="/product/create"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Create Product">playlist_add</i></a></span>
            <span><a href="/products"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Products">view_list</i></a></span>
        </div>
    </div>
    <div class="row">
        <form class="col s12" method="POST" action="/updateProduct/{{$product->id}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input id="product_name" name="product_name" value="{{$product->name}}" type="text" class="validate" required>
                    <label for="product_name">Product Name</label>
                </div>

                <div class="input-field col s12">
                    <input id="description" name="description" value="{{$product->description}}" type="text" class="validate" required>
                    <label for="description">Product Description</label>
                </div>

                <div class="input-field col s12">
                    <input id="unit_cost" name="unit_cost" value="{{$product->unit_cost}}" type="text" class="validate" required>
                    <label for="unit_cost">Unit Cost</label>
                </div>

            </div>

            <button type="submit" class="btn">Update</button>
        </form>
    </div>
</div>
@endsection