@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <span class="teal-text">Edit Product Subscription</span>
            <span><a href="/subscriptions"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Subscription">view_list</i></a></span>
            <span><a href="/products"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Products">apps</i></a></span>
        </div>
    </div>
    <div class="row">
        <form class="col s12" method="POST" action="/user/ProductEdit/{{$product->id}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input placeholder="IPPIS or GFMIS" id="payment_id" name="payment_id" value="{{$product->user->payment_number}}" type="text"
                        class="validate">
                    <label for="payment_id">Payment ID</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <select id="product" name="product">
                        {{-- <option value="" disabled>Choose role</option> --}}
                        @foreach ($prodList as $id=>$name)
                        <option value="{{$id}}">{{$name}}</option>
                        @endforeach
                    </select>
                    <label>Product List</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="units" name="units" value="{{$product->units}}" type="text" class="validate">
                    <label for="units">Units</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input id="start_date" name="start_date" value="{{$product->start_date}}" type="text" class="validate datepicker">
                    <label for="start_date">Start Date</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="end_date" name="end_date" value="{{$product->end_date}}" type="text" class="validate datepicker">
                    <label for="end_date">End Date</label>
                </div>
            </div>
            <button type="submit" class="btn">Edit Subscription</button>
        </form>
    </div>
</div>
@endsection