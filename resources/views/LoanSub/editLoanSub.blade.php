@extends('Layouts.admin-app') 
@section('main-content')
<div class="container">
    {{--
    @include('inc.messages') --}}
    <div class="row">
        <div class="col s12 subject-header">
            <span class="teal-text">Edit  Loan Subscription</span>
            <span><a href="/subscriptions"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Subscription">view_list</i></a></span>
            <span><a href="/products"><i class="small material-icons tooltipped" data-position="bottom" data-tooltip="All Products">apps</i></a></span>
        </div>
    </div>
    <div class="row">
        <form class="col s12" method="POST" action="/loanSub/update/{{$lSub->id}}">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input value="{{$lSub->user->payment_number}}" id="payment_id" name="payment_id" type="text" class="validate">
                    <label for="payment_id">Payment ID</label>
                </div>

                <div class="input-field col s12 m6 l6">
                    <select id="loan_product" name="loan_product">
                            {{-- <option value="" disabled>Choose role</option> --}}
                            @foreach ($loanProd as $id=>$description)
                            <option value="{{$id}}">{{$description}}</option>
                            @endforeach
                        </select>
                    <label>Loan Product</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m6 l6">
                    <input id="amount_applied" name="amount_applied" value="{{$lSub->amount_applied}}" type="text" class="validate">
                    <label for="amount_applied">Amount Applied</label>
                </div>

                <div class="input-field col s12 m6 l6">
                    <input id="custom_tenor" name="custom_tenor" value="{{$lSub->custom_tenor}}" type="text" placeholder="Eg 3 or 5 (values in months Optional)">
                    <label for="custom_tenor">Custom Tenor</label>
                </div>
            </div>

            <button type="submit" class="btn">edit Loan Request</button>
        </form>
    </div>
</div>
@endsection