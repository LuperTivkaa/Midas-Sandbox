@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <span class="teal-text">New  Product</span>
            <span><a href="/products"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Products">view_list</i></a></span>            {{-- <span><a href="/New"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Create User">person_add</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="User's Savings">account_balance_wallet</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="User's Target Savings">monetization_on</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Subscribed Products Schemes">local_grocery_store</i></a></span>            --}}
        </div>
    </div>
    <div class="row">
        <form class="col s12" method="POST" action="/Product/store">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input id="product_name" name="product_name" type="text" class="validate" required>
                    <label for="product_name">Product Name</label>
                </div>

                <div class="input-field col s12">
                    <input id="description" name="description" type="text" class="validate" required>
                    <label for="description">Product Description</label>
                </div>

                <div class="input-field col s12">
                    <input id="unit_cost" name="unit_cost" type="text" class="validate" required>
                    <label for="unit_cost">Unit Cost</label>
                </div>

            </div>

            <button type="submit" class="btn">Create</button>
        </form>
    </div>
</div>
@endsection