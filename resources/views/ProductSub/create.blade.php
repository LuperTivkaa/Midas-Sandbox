@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <span class="teal-text">New  Product Subscription</span>
            <span><a href="/subscriptions"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Subscription">view_list</i></a></span>            {{-- <span><a href="/New"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Create User">person_add</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="User's Savings">account_balance_wallet</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="User's Target Savings">monetization_on</i></a></span>
            <span><a href=""><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="Subscribed Products Schemes">local_grocery_store</i></a></span>            --}}
        </div>
    </div>
    <div class="row">
        <form class="col s12" method="POST" action="/Product-sub/create">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input id="payment_id" name="payment_id" type="text" class="validate" required>
                    <label for="payment_id">Payment ID</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select id="product" name="product">
                                {{-- <option value="" disabled>Choose role</option> --}}
                                <option value="" disabled>Product</option>
                                {{-- @foreach ($products as $id=>$name)
                                <option value="{{$id}}">{{$name}}</option>
                                @endforeach --}}
                            </select>
                    <label>Product</label>
                </div>

                <div class="input-field col s6">
                    <input id="units" name="units" type="text" class="validate" required>
                    <label for="units">Units</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s6">
                    <input id="start_date" name="start_date" type="text" class="validate datepicker" required>
                    <label for="start_date">Start Date</label>
                </div>

                <div class="input-field col s6">
                    <input id="end_start" name="end_start" type="text" class="validate datepicker" required>
                    <label for="end_start">End Date</label>
                </div>
            </div>

            <button type="submit" class="btn">Subscribe</button>
        </form>
    </div>
</div>
@endsection